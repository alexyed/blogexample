<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';

include_once '../config.php';

//obtener baseUrl
$baseUrl = '';
$baseDir = str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
$baseUrl = 'http://' . $_SERVER['HTTP_HOST'] . $baseDir;
define('BASE_URL', $baseUrl);



$route = $_GET['route'] ?? '/';

function render($fileName, $params = []) {
	//la función ob_star(); lo que hace es enviar las vistas al buffer y la función ob_get_clean(); lo que hace es que muestra los datos del buffer y los limpia. osea lo guarda internamente para despues enviar lo resultante 
	ob_start();
	extract($params); // convierte un array asociativo en variables publicas.
	include $fileName;


	return ob_get_clean();
}

/* read phroute documentation*/
use Phroute\Phroute\RouteCollector;

$router = new RouteCollector();

$router->get('/', function () use ($pdo) {
	$query = $pdo->prepare('SELECT * FROM blog_posts ORDER BY id');
	$query->execute();

	$blogPosts = $query->fetchAll(PDO::FETCH_ASSOC);

	return render('../views/index.php', ['blogPosts' => $blogPosts]);
	
});

$router->get('admin', function() {
	return render('../views/admin/index.php');
});

$router->get('/admin/post', function() use ($pdo) {
	$query = $pdo->prepare('SELECT * FROM blog_posts ORDER BY id');
	$query->execute();

	$blogPosts = $query->fetchAll(PDO::FETCH_ASSOC);
	return render('../views/admin/post.php', ['blogPosts' => $blogPosts]);
});

$router->get('/admin/post/create', function() {
	return render('../views/admin/insert-post.php');
});

$router->post('admin/post/create', function() use ($pdo) {
	$sql = 'INSERT INTO blog_posts (title, content) VALUES (:title, :content)';
	$query = $pdo->prepare($sql);
	$result = $query->execute([
		'title' => $_POST['title'],
		'content' => $_POST['content']
	]);
	

	return render('../views/admin/insert-post.php', ['result' => $result]);
});

$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $route);

echo $response;
