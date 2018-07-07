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


// render used when it was'nt yet used twig
/*
function render($fileName, $params = []) {
	//la función ob_star(); lo que hace es enviar las vistas al buffer y la función ob_get_clean(); lo que hace es que muestra los datos del buffer y los limpia. osea lo guarda internamente para despues enviar lo resultante 
	ob_start();
	extract($params); // convierte un array asociativo en variables publicas.
	include $fileName;


	return ob_get_clean();
}*/


/* read phroute documentation*/
use Phroute\Phroute\RouteCollector;

$router = new RouteCollector();

$router->controller('/', app\controllers\indexController::class);

$router->controller('/admin', app\controllers\admin\indexController::class);

$router->controller('/admin/post', app\controllers\admin\postController::class);


$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $route);

echo $response;
