<?php
declare( strict_types=1 );

class Zoo {
	private array $animals = [];

	public function addAnimal( Animal $animal ): void {
		$this->animals[] = $animal;
	}

	public function getAnimals(): array {
		return $this->animals;
	}

	public function feedAnimals(): void {
		foreach ( $this->animals as $animal ) {
			$animal->eat();
		}
	}

	public function petAnimals(): void {
		foreach ( $this->animals as $animal ) {
			$animal->pet();
		}
	}

	public function getAnimalByName( string $name ) {
		foreach ( $this->animals as $animal ) {
			if ( $animal->getName() === $name ) {
				return $animal;
			}
		}
	}
}

