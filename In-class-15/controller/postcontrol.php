<?php

namespace controller;
require './model/postmodel.php';

function getPost() {
    $params = 
    [
        'name' => $_GET['name'] ?? null,
    ];

    $postModel = new Post();
    $users = $postModel->getAllPost($params);
    echo json_encode($users);
    exit();
}

$controller = new PostController();
$controller->getPost();

?>