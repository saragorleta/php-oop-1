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
    public function setVisione($eta){   //$eta deve essere presente come proprietà all'interno di movie?
      if ($eta<18){
        $this->visione= 'non puoi vedere il film che hai scelto';
      } else {
        $visione
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
$mancataVisione->setVisione('19');
$mancataVisione->getVisione();
echo $mancataVisione->getVisione();
