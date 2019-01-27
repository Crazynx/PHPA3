<?php

spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.class.php';
});

$huis1 = new Huis('Appellaan', '5', 'Dorp');
$huis1->setAantalKamers('10');
$huis1->setAantalToiletten('2');
$huis1->setVerwarming('True');
$huis1->setSoortVerwarming('Vloerverwarming');
$huis1->setVierkanteMeterGrond('500');
$huis1->setWozWaarde('200.000');
$huis1->setSoortDak('Puntdak');
$huis1->setEnergielabel('A++');
echo $huis1->getEigenschappen();


?>
