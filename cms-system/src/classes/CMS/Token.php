<?php

namespace EdvGraz\CMS;

class Token {
	protected Database $db;

	public function __construct( Database $db ) {
		$this->db = $db;
	}

	public function save_token( int $id ): string {
		$token = bin2hex( random_bytes( 32 ) );
		$sql   = "INSERT INTO token (token, user_id, expires) VALUES (:token, :user_id, :expires);";
		$this->db->sql_execute( $sql, [
			'token'   => $token,
			'user_id' => $id,
			'expires' => date( 'Y-m-d H:i:s', strtotime( '+4 hours' ) )
		] );

		return $token;
	}

	public function get_user_id( string $token ): int {
		$sql = "SELECT user_id FROM token WHERE token = :token AND expires > :now;";

		return $this->db->sql_execute( $sql, [ 'token' => $token, 'now' => date( 'Y-m-d H:i:s' ) ] )->fetchColumn();

	}
}

