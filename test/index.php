<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>|--Memory--|</title>
<link rel="stylesheet" href="style/indexStyle.css">
</head>
<body>

  <form action="" method="post">
    <input type="submit" name="resetSession"></input>
  </form>
<?php
session_start();

if (isset($_POST['resetSession'])) {
  session_destroy();
}

spl_autoload_register(function($class_name) { // Laad alle klassen die we nodig hebben
  include 'classes/' . $class_name . '.class.php';
});

$memory = new Memory; // Maak een nieuwe instantie van de klasse Memory

if (!isset($_SESSION['instance'])) { // Kijkt of er al een instantie gemaakt is en voert eenmalig dingen uit
  $memory->setKaarten(); // Stel de waarden in die we nodig hebben
  $_SESSION['_kaartWaarden'] = serialize($memory->getKaartWaarden()); // Stop de waarden in een array, zodat
  $_SESSION['_kaartNamen'] = serialize($memory->getKaartNamen()); // ze na een refresh gebruikt kunnen worden
  $_SESSION['aantalKerenGeklikt'] = 0;
  $_SESSION['vorigeKaart'] = 'kaart17';
  $huidigeKaart = 'kaart18';
  $_SESSION['instance'] = TRUE; // Zet dit op true, zodat er niet nog een instantie gemaakt wordt
}

$_kaartWaarden = unserialize($_SESSION['_kaartWaarden']); // Unserialize, zodat we het kunnen gebruiken in het spel
$_kaartNamen = unserialize($_SESSION['_kaartNamen']);

$_kaartWaarden['kaart17'] = '0';
$_kaartWaarden['kaart18'] = '1';

for ($x = 1; $x <= 16; $x++) { // Controleer welke submit knop er is ingedrukt
  if (isset($_POST['kaart' . $x])) {
    $huidigeKaart = 'kaart' . $x;
    $_SESSION['aantalKerenGeklikt'] += 1;
  }
}

echo '<form action="" method="post">';

if ($_SESSION['aantalKerenGeklikt'] == 3) { // Als de aantalKerenGeklikt 3 is, worden alle kaarten omgedraaid
  for ($x = 1; $x <= 16; $x++) {
    echo '<input type="submit" value="" name="kaart' . $x . '"</input>';
    if ($x==4 || $x==8 || $x==12) {
      echo '<br>';
    }
  }
  $_SESSION['aantalKerenGeklikt'] = 0;
} else {
  for ($x = 1; $x <= 16; $x++) {
    if () {

    } else if ($huidigeKaart == 'kaart' . $x) { // Als er een match is, wordt de kaart getoont met de waarde die eronder zit
      echo '<input type="submit" value="' . $_kaartWaarden[$huidigeKaart] . '" name="kaart' . $x . '"</input>';
    } else if ($_SESSION['vorigeKaart'] == 'kaart' . $x) { // Als er een match is, wordt de kaart getoont met de waarde die eronder zit
      echo '<input type="submit" value="' . $_kaartWaarden[$_SESSION['vorigeKaart']] . '" name="kaart' . $x . '"</input>';
    }  else {
      echo '<input type="submit" value="" name="kaart' . $x . '"</input>';
    }
    if ($x==4 || $x==8 || $x==12) {
      echo '<br>';
    }
  }
}
echo '</form>';

if ($memory->checkForMatch($_kaartWaarden[$huidigeKaart], $_kaartWaarden[$_SESSION['vorigeKaart']])) { // Kijk voor een overeenkomst tussen kaarten
  echo '<strong>De twee kaarten komen overeen!</strong>';
  $_SESSION['gematchteKaarten'][] = $_SESSION['vorigeKaart'];
  $_SESSION['gematchteKaarten'][] = $huidigeKaart;

}

print_r($_SESSION['gematchteKaarten']);

$_SESSION['vorigeKaart'] = $huidigeKaart; // Nadat alle taken zijn gedaan kan de vorigekaart de waarde krijgen van de huidigekaart
?>
</body>
</html>
