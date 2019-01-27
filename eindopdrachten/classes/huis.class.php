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

  public function __constructor($parStraatnaam, $parHuisnummer, $parPlaats) {
    $this->_straatnaam = $parStraatnaam;
    $this->_huisnummer = $parHuisnummer;
    $this->_plaats = $parPlaats;
  }

  public function setEigenschappen($eigenschap, $waarde) {

    switch ($eigenschap) {
      case 'aantalKamers':
        $this->_aantalKamers = $waarde;
        break;

      case 'aantalToiletten':
          $this->_aantalToiletten = $waarde;
        break;

      case 'verwarming':
          $this->_verwarming = $waarde;
        break;

      case 'soortVerwarming':
          $this->_soortVerwarming = $waarde;
        break;

      case 'vierkanteMeterGrond':
          $this->_vierkanteMeterGrond = $waarde;
        break;

      case 'wozWaarde':
          $this->_wozWaarde = $waarde;
        break;

      case 'soortDak':
          $this->_soortDak = $waarde;
        break;

      case 'energielabel':
          $this->_energieLabel = $waarde;
        break;

      default:
        return 'Die eigenschap is niet gevonden, dit zijn alle eigenschappen die ingesteld kunnen worden:<br>' .
        '- straatnaam<br>- huisnummer<br>- plaats<br>- aantalKamers<br>- aantalToiletten<br>- ' .
        'verwarming<br>- soortVerwarming<br>- vierkanteMeterGrond<br>' .
        '- wozWaarde<br>- soortDak<br>- energielabel-';
        break;

      return 'De waarde is ingesteld :)';
    }
  }

  public function getEigenschappen() {
    return "<ul> <li>$this->_aantalKamers</li> <li>$this->_aantalToiletten</li>" .
    "<li>$this->_verwarming</li> </ul>";
  }



}

?>
