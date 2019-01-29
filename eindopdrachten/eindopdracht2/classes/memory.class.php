<?php

class Memory {

  protected $aantalKaarten = 16;
  protected $kaartenNamen = [];

  public function __construct() {
    for ($x = 0; $x < $this->aantalKaarten; $x++) {
      $this->kaartenNamen[$x] = 'kaart' . ($x+1);
    }
  }

}

?>
