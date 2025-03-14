<?php

namespace git php4; 

class Item{

    public $name;
    public $price;

    public function __contruct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    } 

    public function business()
    {       
        $food = 
        [
            "Fried Rice" => '5.00',
            "Chicken Fried Rice" => '6.00'
        ];

        return json_encode($food);
    }
}


?>