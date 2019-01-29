<?php

class Kaart extends Memory {

  public function getKaarten($huidigeKaart) {
    echo '<form action="" method="post">';
    for ($x = 1; $x <= $this->aantalKaarten; $x++) {

      if ($huidigeKaart == $this->kaartenNamen[$x-1]) {
        echo '<input type="submit" value="O" name="kaart' . $x . '"></input>';
      } else if ($x == 100) {

      } else {
        echo '<input type="submit" value="" name="kaart' . $x . '"></input>';
      }

      if ($x == 4 || $x == 8 || $x == 12) {
        echo '<br>';
      }
    }
    echo '</form>';
  }


}

?>
