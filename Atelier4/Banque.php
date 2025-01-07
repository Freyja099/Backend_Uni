<?php
require_once 'IBanque.php';
require_once 'Compte.php';
require_once 'IAdmin.php';

class Banque implements IBanque, IAdmin{
    private $comptes = array();

    // Redéfinition de la méthode addCompte (Compte $c)

    public function addCompte(Compte $c){
        $index = count($this->comptes);
        $this->comptes[$index] = $cp;
    }

    // Redéfinition de la méthode afficherComptes()
    public function afficherComptes(){
        foreach($this->comptes as $cp){
            $cp -> getComptestate();
            echo "<hr/>";
        }
    }

    // Redéfinition de la méthode SupprimerComptes()
    public function supprimerCompte($code){
        for($i=0;$i<count($this->comptes);$i++){
            if($this->comptes[$i]->getCode() == $code){
                unset($this->comptes[$i]);
                break;
            }
        }
    }
    
}

?>