<?php

class ImageGalleryCall {
	private PDO $pdo;
	private string $upload_dir;

	public function __construct( PDO $pdo ) {
		$this->pdo        = $pdo;
		$this->upload_dir = '/uploads/img/';
	}

	public function fetchAll(): array {
		$stmt = $this->pdo->prepare( 'SELECT * FROM images ORDER BY id' );
		$stmt->execute();

		return $stmt->fetchAll( PDO::FETCH_CLASS, Image::class );
	}

	public function handleUpload( string $filename, string $alt, string $tmp_path ): void {
		$path           = get_file_path( $filename, $this->upload_dir );
		$final_filename = pathinfo( $path, PATHINFO_BASENAME );
		scale_and_copy( $tmp_path, $path );
		$stmt = $this->pdo->prepare( 'INSERT INTO images (file_name, alt) VALUES (:filename, :alt_text)' );
		$stmt->execute( [
			'filename' => $final_filename,
			'alt_text' => $alt,
		] );
	}

	public function deleteImage( string $id ): void {
		// Holt den Dateinamen des Bildes mit der ID, die Eigenschaft file_name wird sofort aufgerufen
		$file_name = $this->fetchImageById( $id )->file_name;
		// Löscht das Bild aus der Datenbank
		$stmt = $this->pdo->prepare( 'DELETE FROM images WHERE id = :id' );
		// Führt die Abfrage aus
		$stmt->execute( [ 'id' => $id ] );
		// Löscht das Bild aus dem Upload-Verzeichnis
		if ( $file_name ) {
			unlink( dirname( __DIR__ ) . $this->upload_dir . $file_name );
		}
	}

	public function fetchImageById( string $id ): Image|bool {
		// Datenbankabfrage nach Bild mit der ID (ID wird übergeben - Funktionsparameter)
		$stmt = $this->pdo->prepare( 'SELECT * FROM images WHERE id = :id' );
		// Aus der Funktion austreten, wenn die Abfrage nicht funktioniert
		if ( ! $stmt ) {
			return false;
		}
		// Die Abfrage ausführen
		$stmt->execute( [ ':id' => $id ] );

		// Das Ergebnis als Objekt der Klasse Image zurückgeben
		return $stmt->fetchObject( Image::class );
	}

	public function handleChange( string $alt, string $id ): bool {
		$stmt = $this->pdo->prepare( 'UPDATE images SET alt = :alt WHERE id = :id' );
		if ( ! $stmt ) {
			return false;
		}
		$stmt->execute( [
			'alt' => $alt,
			'id'  => $id,
		] );

		return true;
	}
}

