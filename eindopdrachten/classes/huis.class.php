<?php

class Huis {
  protected $_straatnaam;
  protected $_huisnummer;
  protected $_plaats;
  protected $_aantalKamers;
  protected $_aantalToiletten;
  protected $_verwarming;
  protected $_soortVerwarming;
  protected $_vierkanteMeterGrond;
  protected $_wozWaarde;
  protected $_soortDak;
  protected $_energielabel;

  public function __construct($parStraatnaam, $parHuisnummer, $parPlaats) {
    $this->_straatnaam = $parStraatnaam;
    $this->_huisnummer = $parHuisnummer;
    $this->_plaats = $parPlaats;
  }

  public function setAantalKamers($parAantalKamers) {
    $this->_aantalKamers = $parAantalKamers;
  }

  public function setAantalToiletten($parAantalToiletten) {
    $this->_aantalToiletten = $parAantalToiletten;
  }

  public function setVerwarming($parVerwarming) {
    if ($parVerwarming == "True" || $parVerwarming == "False") {
      $this->_verwarming = $parVerwarming;
    } else {
      $this->_verwarming = 'ERROR';
      echo '<strong>Verwarming kan alleen "True" of "False" zijn.</strong><br>';
    }
  }

  public function setSoortVerwarming($parSoortVerwarming) {
    if (strtolower($parSoortVerwarming) == "vloerverwarming" || strtolower($parSoortVerwarming) == "cv") {
      $this->_soortVerwarming = $parSoortVerwarming;
    } else {
      $this->_soortVerwarming = 'ERROR';
      echo '<strong>Soorten verwarmingen zijn "CV" of "Vloerverwarming"</strong><br>';
    }
  }

  public function setVierkanteMeterGrond($parVierkanteMeterGrond) {
    $this->_vierkanteMeterGrond = $parVierkanteMeterGrond;
  }

  public function setWozWaarde($parWozWaarde) {
    $this->_wozWaarde = $parWozWaarde;
  }

  public function setSoortDak($parSoortDak) {
    $this->_soortDak = $parSoortDak;
  }

  public function setEnergielabel($parEnergielabel) {
    $this->_energielabel = $parEnergielabel;
  }

  public function getEigenschappen() {
    return 'Straatnaam = ' . $this->_straatnaam . '<br>' .
          'Huisnummer = ' . $this->_huisnummer . '<br>' .
          'Plaats = ' . $this->_plaats . '<br>' .
          'Aantal kamers = ' . $this->_aantalKamers . '<br>' .
          'Aantal toiletten = ' . $this->_aantalToiletten . '<br>' .
          'Verwarming = ' . $this->_verwarming . '<br>' .
          'Soort verwarming = ' . $this->_soortVerwarming . '<br>' .
          'Vierkante meter grond = ' . $this->_vierkanteMeterGrond . '<br>' .
          'WOZ-waarde = ' . $this->_wozWaarde . '<br>' .
          'Soort dak = ' . $this->_soortDak . '<br>' .
          'Energielabel = ' . $this->_energielabel . '<br>';
  }

}

?>
