<?php
session_start();
spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.class.php';
});

$memory = new Memory;
$kaarten = new Kaart;
$huidigeKaart = '';

for ($x = 1; $x <= 16; $x++) {

  if (isset($_POST['kaart' . $x])) {
    $huidigeKaart = 'kaart' . $x;
    $_SESSION['clickCounter'] += 1;
  }
}

$kaarten->getKaarten($huidigeKaart, $_SESSION['vorigeKaart'], $_SESSION['clickCounter']);
$_SESSION['vorigeKaart'] = $huidigeKaart; //Stelt de vorige kaart in, zodat deze na het submitten van de form blijft staan
if ($_SESSION['clickCounter'] == 2) {
  $_SESSION['clickCounter'] = 0; //Reset de clickCounter
}

echo $_SESSION['clickCounter'];



?>
