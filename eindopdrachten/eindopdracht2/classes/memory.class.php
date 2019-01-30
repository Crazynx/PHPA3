<?php

class Memory {

  protected $aantalKaarten = 16;
  protected $kaartenNamen = [];
  protected $kaartenWaarden = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'];
<<<<<<< HEAD
  private $willekeurigNummer;
=======
>>>>>>> cae8dc6a73ea2105f3e1ff8dbcbf1966cd6d387f

  public function __construct() {
    for ($x = 0; $x < $this->aantalKaarten; $x++) { //Maak de kaartnamen en zet ze in een array
      $this->kaartenNamen[$x] = 'kaart' . ($x+1);
    }

<<<<<<< HEAD
    for ($x = 0; $x < $this->aantalKaarten; $x++) { //Stel waarden in voor elk paar kaarten
      $this->willekeurigNummer = rand(1,100);
    }
    print_r($this->kaartWaarden);
=======
    for ($x = 0; $x < $this->aantalKaarten; $x++) {
      for ($y= 0; $y < 2 ; $y++) {
        $this->kaartWaarden[$x]
      }
    }

>>>>>>> cae8dc6a73ea2105f3e1ff8dbcbf1966cd6d387f
  }

}

?>
