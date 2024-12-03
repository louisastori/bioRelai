<?php
class Commandes{
    private array $commandes;

    public function __construct($array){
        if (is_array($array)) {
            $this->commandes =$array;
        }
    }

    public function getCommandes(){
        return $this->commandes;
    }
    
    public function chercheCommandes($idCommande){
        $i = 0;
        while ($idCommande != $this->commandes[$i]->getIdCommande() && $i < count($this->commandes)-1){
            $i++;
        }
        if ($idCommande == $this->commandes[$i]->getIdCommande()){
            return $this->commandes[$i];
        }
    }
}