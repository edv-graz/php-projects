<?php

class Product {
	readonly string $id;
	private string $src;
	private string $title;
	private bool $rating;

	public function getSrc(): string {
		return $this->src;
	}

	public function getTitle(): string {
		return $this->title;
	}

	public function setTitle( string $title ): void {
		$this->title = $title;
	}

	public function changeRating( bool $rating ): void {
		$this->rating = $rating;
	}

	public function getRating(): bool {
		return $this->rating;
	}
}

