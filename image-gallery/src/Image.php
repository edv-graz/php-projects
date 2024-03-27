<?php

class Image {
	public string $alt;
	readonly string $id;
	readonly string $file_name;

	public function getSrc(): string {
		return "uploads/img/{$this->file_name}";
	}

}

