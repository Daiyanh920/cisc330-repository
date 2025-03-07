<?php

require '../router/router.php';
use router\userRoutes;

$url = $_SERVER['REQUEST_URI'];
$uriArray = explode("/", $url);

userRoutes($uriArray);

?>