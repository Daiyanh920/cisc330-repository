<?php


$Random =    
[
    
    'Phone' => '1200',
    'Computer' => '1500',
    'Tablet' => '1300'
    
];

foreach($Random as $key => $value)
{
    echo $key .':' . $value . '<br>'; //. are basically like adding them together I think
}

function something(string $sentence, string $letter = 'a'): string
{
    return "$sentence, $letter";  //use double quotes here and not single
}

echo something('Hello world', 'b');

?>