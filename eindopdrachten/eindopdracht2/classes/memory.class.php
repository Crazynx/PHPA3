<?php

class Memory {

  protected $aantalKaarten = 16;
  protected $kaartenNamen = [];
  protected $kaartenWaarden = [];
  private $willekeurigNummer;

  public function __construct() {
    for ($x = 0; $x < $this->aantalKaarten; $x++) { //Maak de kaartnamen en zet ze in een array
      $this->kaartenNamen[$x] = 'kaart' . ($x+1);
    }

    for ($x=0; $x < 16; $x++) {
      $randNummer = rand(1,100);

      $this->kaartenWaarden[$this->kaartenNamen[$x]] = $randNummer;
      $this->kaartenWaarden[$this->kaartenNamen[++$x]] = $randNummer;

    }
    print_r($this->kaartenWaarden);

  }

}

?>
