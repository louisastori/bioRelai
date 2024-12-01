<?php
class Produits{
    private array $produits;

    public function __construct($array){
        if (is_array($array)) {
            $this->produits =$array;
        }
    }

    public function getProduits(){
        return $this->produits;
    }
    
    public function chercheProduit($idProduit){
        $i = 0;
        while ($idProduit != $this->produits[$i]->getIdProduit() && $i < count($this->produits)-1){
            $i++;
        }
        if ($idProduit == $this->produits[$i]->getIdProduit()){
            return $this->produits[$i];
        }
    }
}