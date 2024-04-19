<?php

namespace EdvGraz\CMS;

use PDOException;

class Category {
	protected Database $db;

	public function __construct( Database $db ) {
		$this->db = $db;
	}

	public function fetch( int $id ): array {
		$sql = "SELECT id, name, description, navigation, seo_title FROM category WHERE id = :id;";

		return $this->db->sql_execute( $sql, [ 'id' => $id ] )->fetch();
	}

	public function getAll(): array {
		$sql = "SELECT id, name, navigation FROM category;";

		return $this->db->sql_execute( $sql )->fetchAll();
	}

	public function fetchNavigation(): array {
		$sql = "SELECT id, name, seo_title FROM category WHERE navigation = 1;";

		return $this->db->sql_execute( $sql )->fetchAll();
	}

	public function count(): int {
		$sql = "SELECT COUNT(id) FROM category;";

		return $this->db->sql_execute( $sql )->fetchColumn();
	}

	public function push( array $data ): bool {
		try {
			$sql = "INSERT INTO category (name, description, navigation, seo_title) VALUES (:name, :description, :navigation, :seo_title);";
			$this->db->sql_execute( $sql, $data );

			return true;
		} catch ( \PDOException $e ) {
			return false;
		}
	}

	public function update( array $data ): bool {
		try {
			$sql = "UPDATE category SET name = :name, description = :description, navigation = :navigation, seo_title = :seo_title WHERE id = :id;";
			$this->db->sql_execute( $sql, $data );

			return true;
		} catch ( PDOException $e ) {
			return false;
		}
	}

	public function delete( int $id ): bool {
		try {
			$sql = "DELETE FROM category WHERE id = :id;";
			$this->db->sql_execute( $sql, [ 'id' => $id ] );

			return true;
		} catch ( PDOException $e ) {
			return false;

		}

	}
}

