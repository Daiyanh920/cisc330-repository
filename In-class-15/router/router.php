<?php

namespace router;

require './controller/postcontrol.php';

$url = $_SERVER['REQUEST_URI']; 
$uriArray = explode("/", $url); 

function userRoutes($uriArray) 
{
    if ($uriArray[1] === 'post' && $_SERVER['REQUEST_METHOD'] === 'GET') {
        $postController = new postController();
        $postController->getPost();
    }
}
?>