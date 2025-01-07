<?php
require_once 'compte.php';

    class CompteCourant extends Compte{
        private $decouvert;
        public function __construct($c, $s ,$dec){
            parent::__construct($c , $s);
            $this->decouvert = $dec;
        }

        public function retirer($mt){
            if($this->solde + $this->decouvert > $mt){
                $this->solde -= $mt;
            } 
            else{
                throw new Exception("Solde insuffisant");
            }
        }

        public function getCompteState(){
            parent::getCompteState();
            echo ("Decouvert : " . $this->decouvert );
        }

    }
?>