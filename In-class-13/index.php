<?php
$uri = strtok($_SERVER["REQUEST_URI"]);

//get uri pieces
$uriArray = explode("/", $uri);

//0
//1 forms

if($uriArray[0] == '') 
{
    echo include 'some.html';
}

if ($uriArray[0] == 'response' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $response = [
        [
            'Send' => 'Got it'
        ]
    ];

    echo json_encode($response);
    exit();
}


?>