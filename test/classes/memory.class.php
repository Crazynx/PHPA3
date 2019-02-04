<?php

class Memory {

  protected $_kaartenNamen = [];
  protected $_kaartenWaarden = [];
  private $_randNummer;

  public function setKaarten() {
    for ($x = 0; $x < 16; $x++) { //Maak de kaartnamen en zet ze in een array
      $this->_kaartenNamen[$x] = 'kaart' . ($x+1);
    }

    for ($x=0; $x < 16; $x++) {
      $this->_randNummer = rand(1,100);
      $this->_kaartenWaarden[$this->_kaartenNamen[$x]] = $this->_randNummer;
      $this->_kaartenWaarden[$this->_kaartenNamen[++$x]] = $this->_randNummer;
    }
  }

  public function getKaartWaarden() {
    return $this->_kaartenWaarden;
  }

  public function getKaartNamen() {
    return $this->_kaartenNamen;
  }

  public function checkForMatch($huidigeKaart, $vorigeKaart) {
    if ($huidigeKaart == $vorigeKaart) {
      return 'De twee kaarten komen overeen!';
    }
  }

}

?>
