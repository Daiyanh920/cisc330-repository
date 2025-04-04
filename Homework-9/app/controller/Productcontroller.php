<?php
require_once '../models/Product.php';

header('Content-Type: application/json');

$type = $_GET['type'] ?? '';

if ($type) {
    $results = Product::searchByType($type);
    echo json_encode($results);
} else {
    echo json_encode([]);
}
?>
