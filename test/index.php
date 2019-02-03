<?php
session_start();
spl_autoload_register(function($class_name) { // Laad alle klassen in die we nodig hebben
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


?>
