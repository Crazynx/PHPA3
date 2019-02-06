<?php
session_start();
spl_autoload_register(function($class_name) {
  require 'classes/'.$class_name.'.class.php';
});

// unset($_SESSION['instance']);
// session_destroy();

if (!isset($_SESSION['instance'])) { // Eenmalig een object maken en andere dingen die maar één keer moeten gebeuren
  $kaart = new Kaart;
  $_SESSION['kaart'] = serialize($kaart);
  $_SESSION['instance'] = true;
}

$form = new Form;
$huidigeKaart = $form->getPressedCard();
$_SESSION['klikCounter']++;


$kaart = unserialize($_SESSION['kaart']); // Het object terugzetten naar een variabele
if ($kaart->checkForMatch($huidigeKaart, $_SESSION['vorigeKaart'])) {
  echo 'Er is een match!';
}
$kaart->updateKaarten($huidigeKaart, $_SESSION['vorigeKaart'], $_SESSION['klikCounter']);
$_SESSION['vorigeKaart'] = $huidigeKaart; // Stel de vorige geselecteerde kaart in

?>
