<?php

function is_number( $number, $min = 0, $max = 100 ): bool {
	return ( $number >= $min and $number <= $max );
}

function is_text( $text, $min = 1, $max = 100 ): bool {
	return ( strlen( $text ) >= $min and strlen( $text ) <= $max );
}

