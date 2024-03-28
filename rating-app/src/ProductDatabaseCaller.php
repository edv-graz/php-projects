<?php

class ProductDatabaseCaller {
	private PDO $pdo;
	private string $upload_dir;

	public function __construct( PDO $pdo ) {
		$this->pdo        = $pdo;
		$this->upload_dir = '/uploads/img/';
	}

	public function fetchAll(): array {
		$stmt = $this->pdo->prepare( 'SELECT * FROM products ORDER BY upvotes - downvotes desc ' );
		$stmt->execute();

		return $stmt->fetchAll( PDO::FETCH_CLASS, Product::class );
	}

	public function handleUpload( string $filename, string $alt, string $tmp_path ): void {
		$path           = get_file_path( $filename, $this->upload_dir );
		$final_filename = pathinfo( $path, PATHINFO_BASENAME );
		scale_and_copy( $tmp_path, $path );
		$stmt = $this->pdo->prepare( 'INSERT INTO products (file_name, alt) VALUES (:filename, :alt_text)' );
		$stmt->execute( [
			'filename' => $final_filename,
			'alt_text' => $alt,
		] );
	}

	public function deleteProduct( string $id ): void {
		// Holt den Dateinamen des Bildes mit der ID, die Eigenschaft file_name wird sofort aufgerufen
		$file_name = $this->fetchProductById( $id )->getSrc();
		// Löscht das Bild aus der Datenbank
		$stmt = $this->pdo->prepare( 'DELETE FROM products WHERE id = :id' );
		// Führt die Abfrage aus
		$stmt->execute( [ 'id' => $id ] );
		// Löscht das Bild aus dem Upload-Verzeichnis
		if ( $file_name ) {
			unlink( dirname( __DIR__ ) . $this->upload_dir . $file_name );
		}
	}

	public function fetchProductById( string $id ): Product|bool {
		// Datenbankabfrage nach Bild mit der ID (ID wird übergeben - Funktionsparameter)
		$stmt = $this->pdo->prepare( 'SELECT * FROM products WHERE id = :id' );
		// Aus der Funktion austreten, wenn die Abfrage nicht funktioniert
		if ( ! $stmt ) {
			return false;
		}
		// Die Abfrage ausführen
		$stmt->execute( [ ':id' => $id ] );

		// Das Ergebnis als Objekt der Klasse Image zurückgeben
		return $stmt->fetchObject( Product::class );
	}

	public function handleChange( int $up, int $down, string $id ): bool {
		$stmt = $this->pdo->prepare( 'UPDATE products SET upvotes = :upvotes, downvotes = :downvotes WHERE id = :id' );
		if ( ! $stmt ) {
			return false;
		}
		$stmt->execute( [
			'upvotes'   => $up,
			'downvotes' => $down,
			'id'        => $id,
		] );

		return true;
	}
}

