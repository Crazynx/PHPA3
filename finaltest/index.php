<?php
session_start(); // Begin de sessie
spl_autoload_register(function($class_name) { // Laad alle nodige klassen
  require 'classes/'.$class_name.'.class.php';
});

if (isset($_POST['resetSession'])) { // Herstart het spel
  session_destroy();
}

if (!isset($_SESSION['instance'])) { // Eenmalig een object maken en andere dingen doen die maar één keer moeten gebeuren
  $kaart = new Kaart;
  $kaart->toonAlleKaarten();
  $_SESSION['kaart'] = serialize($kaart);
  $_SESSION['instance'] = true;
  $_SESSION['vorigeKaart'] = 'kaart1'; // Vermijd undefined index
  $_SESSION['klikCounter'] = 0;
} else { // Als er al een object gemaakt is dan gebeurt dit
  $form = new Form;
  $huidigeKaart = $form->getPressedCard();
  $_SESSION['klikCounter']++;
  $kaart = unserialize($_SESSION['kaart']); // Het object terugzetten naar een variabele
  $kaart->checkForMatch($huidigeKaart, $_SESSION['vorigeKaart']);
  $kaart->updateKaarten($huidigeKaart, $_SESSION['vorigeKaart'], $_SESSION['klikCounter']);
  $_SESSION['vorigeKaart'] = $huidigeKaart; // Stel de vorige geselecteerde kaart in
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title> Memory game </title>
<link rel="stylesheet" href="style/style.css">
</head>
<body>
  <form class="destroySession" action="" method="post">
    <input type="submit" name="resetSession" value="Opnieuw"></input>
  </form>
</body>
</html>
