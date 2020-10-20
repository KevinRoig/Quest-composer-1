<?php
require_once '../vendor/autoload.php';
use App\Wcs\Hello;
use HelloWorld\SayHello;

$hello1 = new Hello();
echo $hello1->talk(). '<br>';
$hello2 = new SayHello();
echo $hello2->world();
?>