<?php
declare( strict_types=1 );

class Rhino extends Animal {
	public function __construct(
		string $name,
		float $weight,
		float $max_weight,
		float $min_weight,
		bool $isFemale,
		float $food_portion,
	) {
		parent::__construct( $name, $weight, $max_weight, $min_weight, $isFemale, $food_portion );
	}

	public function eat(): void {
		if ( $this->weight < $this->max_weight ) {
			$this->weight += $this->food_portion;
		}
	}

	public function pet(): void {
		echo "Rhino {$this->name} makes a loud noise.";
	}
}