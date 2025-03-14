<?php

require_once __DIR__ . '/../app/core/Router.php';
require_once __DIR__ . '/../app/controller/Controller.php';

$router = new Router();

$router->get('/notes/create', [new NoteController(), 'create']);
$router->post('/notes/store', [new NoteController(), 'store']);

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

$router->resolve($uri, $method);
