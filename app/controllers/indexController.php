<?php

namespace app\controllers;

class IndexController extends baseController {
	
	public function getIndex(){
	global $pdo;	
	$query = $pdo->prepare('SELECT * FROM blog_posts ORDER BY id');
	$query->execute();

	$blogPosts = $query->fetchAll(\PDO::FETCH_ASSOC);

	return $this->render('index.twig', ['blogPosts' => $blogPosts]);
	
	}
}