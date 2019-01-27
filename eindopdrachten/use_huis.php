<?php

spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.class.php';
});

$huis1 = new Huis;
echo $huis1->getEigenschappen('aantaldKamers', '5');


?>
