<?php

class Kaart {

  public $_kaartWaarden;
  public $_kaartNamen;

  public function __construct() {
    $this->_initialiseerKaartNamen();
    $this->_initialiseerKaartWaarden();
  }

  public function resetKaarten() {
    echo '<form action="" method="post">';
      for ($x = 1; $x <= 16; $x++) {
        echo '<input type="submit" name="'.$this->_kaartNamen[$x-1].'" value=""></input>';
        if ($x==4||$x==8||$x==12) {
          echo '<br>';
        }
      }
    echo '</form>';
  }

  public function updateKaarten($huidigeKaart, $vorigeKaart, $klikCounter) {
    if ($klikCounter == 3) {
      $this->resetKaarten();
      $_SESSION['klikCounter'] = 0; // Reset de klik counter
    } else {
      echo '<form action="" method="post">';
        for ($x = 0; $x < 16; $x++) {
          echo '<input type="submit" name="'.$this->_kaartNamen[$x].'" value="'.$this->_kaartWaarden[$this->_kaartNamen[$x]].'"></input>';
          if ($x==3||$x==7||$x==11) {
            echo '<br>';
          }
        }
      echo '<form>';
    }
  }

  private function _initialiseerKaartNamen() {
    for ($x = 0; $x < 16; $x++) {
      $this->_kaartNamen[$x] = 'kaart'.($x+1);
    }
  }

  private function _initialiseerKaartWaarden() {
    for ($x = 0; $x < 16; $x++) {
      $randNum = rand(1,100);
      $this->_kaartWaarden[$this->_kaartNamen[$x]] = $randNum;
      $this->_kaartWaarden[$this->_kaartNamen[++$x]] = $randNum;
    }
  }

}

?>
