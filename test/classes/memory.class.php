<?php

class Memory {

  protected $aantalKaarten = 16;
  protected $kaartenNamen = [];
  protected $kaartenWaarden = [];
  private $randNummer;

  public function setKaarten() {
    for ($x = 0; $x < $this->aantalKaarten; $x++) { //Maak de kaartnamen en zet ze in een array
      $this->kaartenNamen[$x] = 'kaart' . ($x+1);
    }

    for ($x=0; $x < 16; $x++) {
      $this->randNummer = rand(1,100);
      $this->kaartenWaarden[$this->kaartenNamen[$x]] = $this->randNummer;
      $this->kaartenWaarden[$this->kaartenNamen[++$x]] = $this->randNummer;

    }
  }

  public function getKaartWaarden() {
    return $this->kaartenWaarden;
  }

  public function getKaartNamen() {
    return $this->kaartenNamen;
  }

}

?>
