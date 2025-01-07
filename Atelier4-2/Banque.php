<?php 
require_once 'IBanque.php';
require_once 'IAdmin.php';
require_once 'Compte.php';
    class Banque{
        private $comptes = array();
        public function addCompte( Compte $cp){
            $index = count($this->comptes);
            $this-> comptes[$index] = $cp;
        }

        public function afficherComptes(){
            foreach($this-> comptes as $cp){
                $cp->getCompteState();
                echo( "<hr/>");
            }
        }
        public function supprimerComptes($code){
            for($i = 0 ; $i<count($this->comptes) ; $i++){
                if($this->comptes[$i]->getCode() == $code){
                    unset($this->comptes[$i]);
                    break;
                }
            }
        }
    }
?>