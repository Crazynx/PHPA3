<?php

class Memory {

  protected $aantalKaarten = 16;
  protected $kaartenNamen = [];
  protected $kaartenWaarden = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'];

  public function __construct() {
    for ($x = 0; $x < $this->aantalKaarten; $x++) { //Maak de kaartnamen en zet ze in een array
      $this->kaartenNamen[$x] = 'kaart' . ($x+1);
    }

    for ($x = 0; $x < $this->aantalKaarten; $x++) {
      for ($y= 0; $y < 2 ; $y++) {
        $this->kaartWaarden[$x]
      }
    }

  }

}

?>
