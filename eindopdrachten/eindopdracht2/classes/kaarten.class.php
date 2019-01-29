<?php

class Kaarten extends Memory {
  public $kaarten = [];

  public function __construct() {
    for ($i=1; $i <= 16 ; $i++) {
      $this->kaarten[$i] = 'kaart' . $i; //Voor gebruik bij het checken op welke knop er is gedrukt
    }
  }

  public function getKaarten($kaart) {
    echo '<form action="index.php" method="post">';
    for ($x = 1; $x <= 16; $x++) {

      if (('kaart'.$x) == $kaart) {
        echo '<input type="submit" name="kaart' . $x .'" value="d">';
      } else {
        echo '<input type="submit" name="kaart' . $x .'" value="">';
      }

      if ($x == 4 || $x == 8 || $x == 12) {
        echo '<br>';
      }
    }
    echo '</form>';
  }

}
?>