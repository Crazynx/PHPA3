<?php

class Kaart {

  private $_kaartWaarden;
  private $_kaartNamen;
  private $_gematchteKaarten;

  public function __construct() { // Als er een object gemaakt wordt, dan worden deze methoden opgeroepen
    $this->_initialiseerKaartNamen();
    $this->_initialiseerKaartWaarden();
  }

  public function checkForMatch($huidigeKaart, $vorigeKaart) {
    if (isset($huidigeKaart) && isset($vorigeKaart)) {
      if ($this->_kaartWaarden[$huidigeKaart] == $this->_kaartWaarden[$vorigeKaart] && $huidigeKaart != $vorigeKaart) { // Een kaart kan niet met dezelfde kaart overeen komen
        $_SESSION['gematchteKaarten'][$huidigeKaart] = $huidigeKaart; // Voeg de kaart toe aan de gematchteKaarten array
        $_SESSION['gematchteKaarten'][$vorigeKaart] = $vorigeKaart; // Voeg de kaart toe aan de gematchteKaarten array
        return true; // True, want er is een match gevonden
      }
    }
  }

  public function toonAlleKaarten() { // Toon alle kaarten
    echo '<form action="" method="post">';
      for ($x = 0; $x < 16; $x++) {
        echo '<input type="submit" name="'.$this->_kaartNamen[$x].'" value="'.$this->_kaartWaarden['kaart'.($x+1)].'"></input>';
        if ($x==3 || $x==7|| $x==11) {
          echo '<br>';
        }
      }
    echo '</form>';
  }

  public function resetKaarten() { // Draai alle kaarten om
    echo '<form action="" method="post">';
      for ($x = 1; $x <= 16; $x++) {
        if (isset($_SESSION['gematchteKaarten']['kaart'.$x])) { // Kijkt of de waarde in de gematchteKaarten array staat, zodat die kaart "omgedraaid" is
          echo '<input type="submit" name="'.$this->_kaartNamen[$x-1].'" value="'.$this->_kaartWaarden[$this->_kaartNamen[$x-1]].'"></input>';
        } else { // Anders wordt er een "kale" kaart getoont
          echo '<input type="submit" name="'.$this->_kaartNamen[$x-1].'" value=""></input>';
        }
        if ($x==4||$x==8||$x==12) { // Zorgt voor de linebreaks
          echo '<br>';
        }
      }
    echo '</form>';
  }

  public function updateKaarten($huidigeKaart, $vorigeKaart) {
    echo '<form action="" method="post">';
      for ($x = 0; $x < 16; $x++) {
        if ($huidigeKaart == 'kaart'.($x+1) || $vorigeKaart == 'kaart'.($x+1)) {
          echo '<input type="submit" name="'.$this->_kaartNamen[$x].'" value="'.$this->_kaartWaarden['kaart'.($x+1)].'"></input>';
        } else if (isset($_SESSION['gematchteKaarten']['kaart'.($x+1)])) { // Kijkt of de waarde in de gematchteKaarten array staat, zodat die kaart "omgedraaid" is
          echo '<input type="submit" name="'.$this->_kaartNamen[$x].'" value="'.$this->_kaartWaarden['kaart'.($x+1)].'"></input>';
        } else { // Anders wordt er een "kale" kaart getoont
          echo '<input type="submit" name="'.$this->_kaartNamen[$x].'" value=""></input>';
        }
        if ($x==3||$x==7||$x==11) { // Zorgt voor de linebreaks
          echo '<br>';
        }
      }
    echo '<form>';
  }

  private function _initialiseerKaartNamen() { // Stelt de naam array in
    for ($x = 0; $x < 16; $x++) {
      $this->_kaartNamen[$x] = 'kaart'.($x+1);
    }
  }

  private function _initialiseerKaartWaarden() { // Stelt de waarden in die bij elke kaart hoort
    for ($x = 0; $x < 16; $x++) {
      $randNum = rand(1,100);
      $this->_kaartWaarden[$this->_kaartNamen[$x]] = $randNum;
      $this->_kaartWaarden[$this->_kaartNamen[15-$x]] = $randNum;
    }
  }
}
?>
