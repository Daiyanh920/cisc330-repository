<?php


if($_SERVER["REQUEST_URI"] === '/html')
{
  echo 
  '
  <div>
    <p>HTML code in php application</p>
  </div>
  ';

}

if($_SERVER["REQUEST_URI"]  === '/JSON')
{
  echo
  '
  {

    "name": Daiyan,
    "age": 19,
    "Dog": Pitbull

  }
  ';
}
 

?>