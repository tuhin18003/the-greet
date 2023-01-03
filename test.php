<?php
require_once './vendor/autoload.php';


use Tuhin18003\Greet\Greet;

$Greet= new Greet();

echo $Greet->hello('Tuhin', 'l F j, Y' );


?>