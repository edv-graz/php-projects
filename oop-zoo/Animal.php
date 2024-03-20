<?php
declare( strict_types=1 );

abstract class Animal {
	public function __construct(
		protected string $name,
		protected float $weight,
		protected float $max_weight,
		protected float $min_weight,
		protected bool $isFemale,
		protected float $food_portion,
	) {
	}

	abstract public function eat(): void;

	abstract public function pet(): void;

	public function getWeight(): float {
		return $this->weight;
	}

	public function getMinWeight(): float {
		return $this->min_weight;
	}

	public function getMaxWeight(): float {
		return $this->max_weight;
	}

	public function getName(): string {
		return $this->name;
	}
}