<?php

header("Access-Control-Allow-Origin: *");

$uri = strtok($_SERVER["REQUEST_URI"], '?');

//get uri pieces
$uriArray = explode("/", $uri);
//var_dump($uriArray);
//0
//1 forms

if ($uriArray[0] === 'menu' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    
    $menu = 
    [
        'Fried Rice' => '05.00',
        'Kimchi Fried Rice' => '06.50',
    ];



    echo json_encode($menu);
    exit();
}

if ($uriArray[1] === 'form' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    echo json_encode([
        'message' => 'Success'
    ]);
    exit();
}


?>