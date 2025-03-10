<?php
try {

    $number = 4;

    if ($number<5) 
    {
        throw new Exception('Value must be greater than 5');
    }
    } catch (Error $e) 
    {
       echo 'Caught error';
    }
?>