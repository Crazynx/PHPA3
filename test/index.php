<?php
session_start();
spl_autoload_register(function($class_name) {
  include 'classes/' . $class_name . '.class.php';
});


if (!isset($_SESSION['instance'])) {
  $memory = new Memory;
  $memory->setKaarten();
  $_SESSION['kaartWaarden'] = serialize($memory->getKaartWaarden());
  $_SESSION['kaartNamen'] = serialize($memory->getKaartNamen());
  $_SESSION['instance'] = TRUE;
}

$kaartWaarden = unserialize($_SESSION['kaartWaarden']);
$kaartNamen = unserialize($_SESSION['kaartNamen']);

print_r($kaartWaarden);

?>
