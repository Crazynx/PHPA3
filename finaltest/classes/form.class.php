<?php

class Form {

  public function getPressedCard() {
    for ($x = 1; $x <= 16; $x++) {
      if (isset($_POST['kaart' . $x])) {
        return 'kaart' . $x;
      }
    }
  }

}

?>
