<?php

class Product {
	readonly string $id;
	private string $src;
	private string $title;
	private int $upvotes;
	private int $downvotes;

	public function getSrc(): string {
		return $this->src;
	}

	public function getTitle(): string {
		return $this->title;
	}

	public function setTitle( string $title ): void {
		$this->title = $title;
	}

	public function upVote(): void {
		$this->upvotes += 1;
	}

	public function getUpVotes() {
		return $this->upvotes;
	}

	public function getDownVotes() {
		return $this->downvotes;
	}

	public function downVote() {
		$this->downvotes += 1;
	}

	public function getVoting(): int {
		return $this->upvotes - $this->downvotes;
	}
}

