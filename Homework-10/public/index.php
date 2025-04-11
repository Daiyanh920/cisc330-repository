<?php
require_once '../app/models/Product.php';
require_once '../app/controllers/ProductController.php';

$env = parse_ini_file('../.env');
$pdo = new PDO(
    "mysql:host={$env['DB_HOST']};dbname={$env['DB_NAME']}",
    $env['DB_USER']
);

$controller = new ProductController($pdo);

$method = $_SERVER['REQUEST_METHOD'];
$url = $_GET['url'] ?? '';
$segments = explode('/', trim($url, '/'));

$resource = $segments[0] ?? '';
$action = $segments[1] ?? '';

if ($resource === 'product') 
{
    $input = json_decode(file_get_contents('php://input'), true) ?? [];
    $controller->handleRequest($method, $action, $input);
} 
else 
{
    http_response_code(404);
    echo json_encode(['error' => 'Resource not found']);
}


?>