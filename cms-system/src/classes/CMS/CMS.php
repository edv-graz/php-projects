<?php

namespace EdvGraz\CMS;


class CMS {
	protected Database $db;
	protected Article $article;
	protected Category $category;
	protected User $user;
	protected Image $image;
	protected Session $session;
	protected Token $token;
	protected Comment $comment;

	public function __construct( string $dsn, string $user_name, string $password ) {
		$this->db = new Database( $dsn, $user_name, $password );
	}

	public function getArticle(): Article {
		if ( ! isset( $this->article ) ) {
			$this->article = new Article( $this->db );
		}

		return $this->article;
	}

	public function getCategory(): Category {
		if ( ! isset( $this->category ) ) {
			$this->category = new Category( $this->db );
		}

		return $this->category;
	}

	public function getUser(): User {
		if ( ! isset( $this->user ) ) {
			$this->user = new User( $this->db );
		}

		return $this->user;

	}

	public function getImage(): Image {
		if ( ! isset( $this->image ) ) {
			$this->image = new Image( $this->db );
		}

		return $this->image;
	}

	public function getSession(): Session {
		if ( ! isset( $this->session ) ) {
			$this->session = new Session();
		}

		return $this->session;
	}

	public function getToken(): Token {
		if ( ! isset( $this->token ) ) {
			$this->token = new Token( $this->db );
		}

		return $this->token;
	}
	public function getComment(): Comment {
		if ( ! isset( $this->comment ) ) {
			$this->comment = new Comment( $this->db );
		}

		return $this->comment;
	}
}
