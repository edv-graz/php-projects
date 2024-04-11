<?php

class Validate {
	public static function is_number( $number, $min = 0, $max = 100 ): bool {
		return ( $number >= $min and $number <= $max );
	}

	public static function is_text( $text, $min = 1, $max = 100 ): bool {
		return ( strlen( $text ) >= $min and strlen( $text ) <= $max );
	}

	public static function is_user_id( $id, $users ): bool {
		foreach ( $users as $user ) {
			if ( $user['id'] == $id ) {
				return true;
			}
		}

		return false;
	}

	public static function is_category_id( $id, $categories ): bool {
		foreach ( $categories as $category ) {
			if ( $category['id'] == $id ) {
				return true;
			}
		}

		return false;
	}
}

