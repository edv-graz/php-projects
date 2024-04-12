<?php

namespace EdvGraz\CMS;

use PDO;
use PDOStatement;

class Database extends PDO {
	public function __construct( string $dsn, string $user_name, string $password, array $options = [] ) {
		$default = [
			PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		];
		// array_replace wird verwendet, um die Standardoptionen (default) zu überschreiben, wenn Optionen übergeben werden
		parent::__construct( $dsn, $user_name, $password, array_replace( $default, $options ) );
	}

	public function sql_execute( string $sql, array $bindings = [] ): PDOStatement {
		if ( ! $bindings ) {
			return $this->query( $sql );
		}
		$stmt = $this->prepare( $sql );
		foreach ( $bindings as $key => $value ) {
			if ( is_int( $value ) ) {
				$stmt->bindValue( $key, $value, PDO::PARAM_INT );
			} else {
				$stmt->bindValue( $key, $value );
			}
		}
		$stmt->execute();

		return $stmt;
	}
}

