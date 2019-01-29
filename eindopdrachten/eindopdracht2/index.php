<?php
spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.class.php';
});

$memory = new Memory;
$kaarten = new Kaart;

for ($x = 1; $x <= 16; $x++) {

  if (isset($_POST['kaart' . $x])) {
    $huidigeKaart = 'kaart' . $x;
  }
}

echo $huidigeKaart;
$kaarten->getKaarten($huidigeKaart);


?>
