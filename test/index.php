<?php
session_start();
spl_autoload_register(function($class_name) { // Laad alle klassen die we nodig hebben
  include 'classes/' . $class_name . '.class.php';
});

if (!isset($_SESSION['instance'])) { // Kijkt of er al een instantie gemaakt is
  $memory = new Memory; // Maak een nieuwe instantie van de klasse Memory
  $memory->setKaarten(); // Stel de waarden in die we nodig hebben
  $_SESSION['kaartWaarden'] = serialize($memory->getKaartWaarden()); // Stop de waarden in een array, zodat
  $_SESSION['kaartNamen'] = serialize($memory->getKaartNamen()); // ze na een refresh gebruikt kunnen worden
  $_SESSION['instance'] = TRUE; // Zet dit op true, zodat er niet nog een instantie gemaakt wordt
}

$kaartWaarden = unserialize($_SESSION['kaartWaarden']); // Unserialize, zodat we het kunnen gebruiken in het spel
$kaartNamen = unserialize($_SESSION['kaartNamen']);

for ($x = 1; $x <= 16; $x++) {
  if (isset($_POST['kaart' . $x])) {
    $huidigeKaart = 'kaart' . $x;
    $_SESSION['aantalKerenGeklikt'] += 1;
  }
}

echo '<form action="" method="post">';

if ($_SESSION['aantalKerenGeklikt'] == 0) {
  for ($x = 1; $x <= 16; $x++) {
    echo '<input type="submit" value="" name="kaart' . $x . '"</input>';
    if ($x==4 || $x==8 || $x==12) {
      echo '<br>';
    }
  }
} else {
  for ($x = 1; $x <= 16; $x++) {
    if ($huidigeKaart == 'kaart' . $x) {
      echo '<input type="submit" value="' . $kaartWaarden[$huidigeKaart] . '" name="kaart' . $x . '"</input>';
    } else if ($_SESSION['vorigeKaart'] == 'kaart' . $x) {
      echo '<input type="submit" value="' . $kaartWaarden[$_SESSION['vorigeKaart']] . '" name="kaart' . $x . '"</input>';
    } else {
      echo '<input type="submit" value="" name="kaart' . $x . '"</input>';
    }
    if ($x==4 || $x==8 || $x==12) {
      echo '<br>';
    }
  }
}

echo '</form>';

if ($kaartWaarden[$huidigeKaart] == $kaartWaarden[$_SESSION['vorigeKaart']]) {
  echo 'De twee kaarten komen overeen!!!';
}

$_SESSION['vorigeKaart'] = $huidigeKaart;


?>
