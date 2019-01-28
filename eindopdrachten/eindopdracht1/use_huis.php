<?php

spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.class.php';
});

$huis1 = new Huis('Appelsaplaan', 5, 'AMSTERDAM');
$huis1->setAantalKamers(5);
$huis1->setAantalToiletten(2);
$huis1->setVerwarming(true);
$huis1->setSoortVerwarming('vloerverwarming');
$huis1->setVierkanteMeterGrond(5000);
$huis1->setWozWaarde(500000);
$huis1->setSoortDak('puntdak');
$huis1->setEnergielabel('A++');
echo $huis1->getEigenschappen();


?>
