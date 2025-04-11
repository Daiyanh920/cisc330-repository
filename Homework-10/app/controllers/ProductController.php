<?php

class ProductController {
    private $model;

    public function __construct($pdo) {
        $this->model = new Product($pdo);
    }

    public function handleRequest($method, $action, $data) {
        header('Content-Type: application/json');

        switch ($action) {
            case 'view':
                echo json_encode($this->model->getAll());
                break;

            case 'search':
                echo json_encode($this->model->search($data['query'] ?? ''));
                break;

            case 'create':
                $this->model->create($data['name'], $data['price']);
                echo json_encode(['message' => 'Product created']);
                break;

            case 'update':
                $this->model->update($data['id'], $data['name'], $data['price']);
                echo json_encode(['message' => 'Product updated']);
                break;

            case 'delete':
                $this->model->delete($data['id']);
                echo json_encode(['message' => 'Product deleted']);
                break;

            default:
                http_response_code(404);
                echo json_encode(['error' => 'Action not found']);
                break;
        }
    }
}


?>