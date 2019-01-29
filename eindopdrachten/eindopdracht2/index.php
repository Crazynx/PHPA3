<?php
spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.class.php';
});
$kaarten = new Kaarten;

foreach ($kaarten->kaarten as $kaart) { //Check op welke kaart is gedrukt
  if (isset($_POST[$kaart])) {
    $kaarten->getKaarten($kaart);
  }

}



?>
