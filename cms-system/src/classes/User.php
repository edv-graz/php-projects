<?php

class User {
	protected Database $db;

	public function __construct( Database $db ) {
		$this->db = $db;
	}

	public function fetch( int $id ) {
		$sql = "SELECT id, forename, surname, joined, profile_pic
				FROM user
				WHERE id = :id;";

		return $this->db->sql_execute( $sql, [ 'id' => $id ] )->fetch();
	}

	public function getAll(): array {
		$sql = "SELECT id, forename, surname, email, joined, profile_pic
				FROM user;";

		return $this->db->sql_execute( $sql )->fetchAll();
	}
}