<?php

class Movie {
    public $cast;
    public $genere;
    public $regia;
    public $visione= 'solo maggiorenni';
    public $anno;

    // COSTRUTTORE
    public function __construct ($_genere) {
      this->genere= $_genere;
    }
    // METODO
    public function setVisione($eta){
      if ($eta<18){
        $this->visione= 'non puoi vedere il film che hai scelto';
      }

    }
    public function getVisione(){
      return $this->visione;
    }
}
// RICHIAMO COSTRUTTORE
$filmDrammatico = new Movie ('Drammatico');
echo $filmDrammatico;

// RICHIAMO METODO
$mancataVisione->setVisione('non puoi vedere il film che hai scelto');
echo $mancataVisione->getVisione();
