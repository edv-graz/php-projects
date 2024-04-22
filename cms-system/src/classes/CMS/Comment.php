<?php

namespace EdvGraz\CMS;

class Comment {
	protected Database $db;

	public function __construct(Database $db) {
		$this->db = $db;
	}
	public function getComments(int $id): array {
		$sql = "SELECT c.id, c.comment, c.created, c.user_id,
						CONCAT(u.forename, ' ', u.surname) AS author
						FROM comments c
						JOIN user u ON c.user_id = u.id
						WHERE c.article_id = :id";
		return $this->db->sql_execute($sql, [':id' => $id])->fetchAll();
	}

	public function addComment(int $article_id, int $user_id, string $comment): void {
		$sql = "INSERT INTO comments (article_id, user_id, comment)
						VALUES (:article_id, :user_id, :comment)";
		$this->db->sql_execute($sql, [
			':article_id' => $article_id,
			':user_id' => $user_id,
			':comment' => $comment
		]);
	}
	public function getCommentById(int $id): array {
		$sql = "SELECT id, comment, created, user_id, article_id
						FROM comments
						WHERE id = :id";
		return $this->db->sql_execute($sql, [':id' => $id])->fetch();
	}
	public function updateComment(int $id, string $comment): void {
		$sql = "UPDATE comments
						SET comment = :comment
						WHERE id = :id";
		$this->db->sql_execute($sql, [':comment' => $comment, ':id' => $id]);
	}

}