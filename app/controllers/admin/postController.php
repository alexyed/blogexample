<?php

namespace app\controllers\admin;

use app\controllers\baseController;

class PostController extends baseController {

	public function getIndex() {

		global $pdo;
		$query = $pdo->prepare('SELECT * FROM blog_posts ORDER BY id');
		$query->execute();

		$blogPosts = $query->fetchAll(\PDO::FETCH_ASSOC);
		return $this->render('admin/post.twig', ['blogPosts' => $blogPosts]);
	}

	public function getCreate() {
		return $this->render('admin/insert-post.twig');
	}

	public function postCreate() {

		global $pdo;
		$sql = 'INSERT INTO blog_posts (title, content) VALUES (:title, :content)';
		$query = $pdo->prepare($sql);
		$result = $query->execute([
		'title' => $_POST['title'],
		'content' => $_POST['content']
		]);
	

		return $this->render('admin/insert-post.twig', ['result' => $result]);
	}
}