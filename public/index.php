<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\IndexController;
use Controllers\Page404Controller;

$router = new Router();


// Index
$router->get('/', [IndexController::class, 'index']);
$router->post('/', [IndexController::class, 'index']);

$router->get('/nuestra-historia', [IndexController::class, 'nuestraHistoria']);
$router->post('/nuestra-historia', [IndexController::class, 'nuestraHistoria']);

$router->get('/la-boda', [IndexController::class, 'laBoda']);
$router->post('/la-boda', [IndexController::class, 'laBoda']);

$router->get('/rsvp', [IndexController::class, 'rsvp']);
$router->post('/rsvp', [IndexController::class, 'rsvp']);

$router->get('/planea-tu-visita', [IndexController::class, 'planeaTuVisita']);
$router->post('/planea-tu-visita', [IndexController::class, 'planeaTuVisita']);

// 404
$router->get('/404',[Page404Controller::class, 'error']);

$router->comprobarRutas();