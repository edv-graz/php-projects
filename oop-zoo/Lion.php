<?php
declare( strict_types=1 );

class Lion extends Cats {
	public function __construct( string $name, float $weight, float $max_weight, float $min_weight, bool $isFemale, float $food_portion, int $danger ) {
		parent::__construct( $name, $weight, $max_weight, $min_weight, $isFemale, $food_portion, $danger );
	}

	public function eat(): void {
		$this->weight += $this->food_portion;
	}

	public function pet(): void {
		echo $this->roar();
	}

	public function roar(): string {
		return "Lion says: Roooooaaaar!";
	}
}