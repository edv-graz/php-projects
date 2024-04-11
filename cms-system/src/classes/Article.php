<?php

class Article {
	protected Database $db;

	public function __construct( Database $db ) {
		$this->db = $db;
	}

	public function fetch( int $id, bool $published = true ) {
		$sql = "SELECT a.id, a.title, a.summary, a.content, a.created, a.category_id, a.user_id, a.published, c.name  AS category,
						CONCAT(u.forename, ' ', u.surname) as author, 
						i.id as image_id, i.filename as image_file, i.alttext as image_alt
						FROM articles as a
						JOIN category as c ON a.category_id = c.id
						JOIN user as u ON a.user_id = u.id
						LEFT JOIN images as i ON a.images_id = i.id
						WHERE a.id = :id";
		if ( $published ) {
			$sql .= " AND a.published = 1";
		}
		$sql .= ";";

		return $this->db->sql_execute( $sql, [ 'id' => $id ] )->fetch();
	}

	public function getAll( int $cat_id = null, bool $published = true, int $user_id = null, int $limit = 1000 ): array {
		$sql = "SELECT a.id, a.title, a.summary, a.category_id, a.user_id, a.published, a.created, c.name  AS category,
						CONCAT(u.forename, ' ', u.surname) as author, 
						i.filename as image_file , i.alttext as image_alt
						FROM articles as a
						JOIN category as c ON a.category_id = c.id
						JOIN user as u ON a.user_id = u.id
						LEFT JOIN images as i ON a.images_id = i.id
						WHERE (a.category_id = :cat_id OR :cat_id IS NULL) 
						AND (a.user_id = :user_id OR :user_id IS NULL)";

		if ( $published ) {
			$sql .= " AND a.published = 1";
		}
		$sql .= " ORDER BY a.id DESC LIMIT :limit;";

		return $this->db->sql_execute( $sql, [ 'cat_id' => $cat_id, 'user_id' => $user_id, 'limit' => $limit ] )->fetchAll();
	}

	public function update( array $bindings ): void {
		$sql = "UPDATE articles SET title = :title, summary = :summary, content = :content, published = :published, category_id = :category_id, user_id = :user_id, images_id = :image_id WHERE id = :id;";
		$this->db->sql_execute( $sql, $bindings );
	}

	public function push( array $bindings ): void {
		$sql = "INSERT INTO articles (title, summary, content, published, category_id, user_id, images_id) VALUES (:title, :summary, :content, :published, :category_id, :user_id, :image_id);";
		$this->db->sql_execute( $sql, $bindings );
	}

	public function delete( int $id ): void {
		$sql = "DELETE FROM articles WHERE id = :id;";
		$this->db->sql_execute( $sql, [ 'id' => $id ] );
	}
}

