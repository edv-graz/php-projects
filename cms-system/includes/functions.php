<?php

function e( $string ): string {
	return htmlentities( $string, ENT_QUOTES, 'UTF-8', false );
}

function pdo_execute( PDO $pdo, string $sql, array $bindings = null ): false|PDOStatement {
	if ( ! $bindings ) {
		// Wenn keine Bindings vorhanden sind, wird die SQL-Anweisung ausgeführt und das Ergebnis zurückgegeben
		// Query führt dabei die SQL-Anweisung aus und gibt ein PDOStatement-Objekt zurück. Funktioniert nur ohne Anweisungen (keine Bindings)
		return $pdo->query( $sql );
	}
	$statement = $pdo->prepare( $sql );
	$statement->execute( $bindings );

	return $statement;
}


