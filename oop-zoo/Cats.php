<?php
declare( strict_types=1 );

abstract class Cats extends Animal {
	private string $sound = '';
	private int $danger = 0;

	public function __construct( string $name, float $weight, float $max_weight, float $min_weight, bool $isFemale, float $food_portion, int $danger ) {
		parent::__construct( $name, $weight, $max_weight, $min_weight, $isFemale, $food_portion );
		$this->danger = $danger;
	}

	abstract public function roar(): string;

	public function getDanger(): int {
		return $this->danger;
	}
}