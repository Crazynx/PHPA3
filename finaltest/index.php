<?php
session_start();
spl_autoload_register(function($class_name) {
  require 'classes/'.$class_name.'.class.php';
});

// unset($_SESSION['instance']);

if (!isset($_SESSION['instance'])) {
  $kaart = new Kaart;
  $_SESSION['kaart'] = serialize($kaart);
  $_SESSION['instance'] = true;
}

$kaart = unserialize($_SESSION['kaart']);
$kaart->updateKaarten('kaart1', 'kaart2', 2);

print_r($kaart->_kaartWaarden);
echo '<br>';
print_r($kaart->_kaartNamen);

?>
