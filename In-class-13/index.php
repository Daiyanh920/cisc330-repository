<?php
$uri = strtok($_SERVER["REQUEST_URI"]);

//get uri pieces
$uriArray = explode("/", $uri);

//0
//1 forms

if($uriArray[0] == '') 
{
    echo include 'some.html';
    exit();
} else {
    $response = [
        [
            'Send' => 'Got it'
        ]
    ];

    echo json_encode($response);
    exit();
}



?>