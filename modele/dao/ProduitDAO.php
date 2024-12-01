<?php
class ProduitDAO{


    public static function lesProduits(){
        $result =[];
        $requetePrepa = DBConnex::getInstance()->prepare("select idProduit , nomProduit , descriptifProduit , photoProduit FROM `produits`");

        $requetePrepa->execute();
        $liste = $requetePrepa->fetchAll(PDO::FETCH_ASSOC);

        if(!empty($liste)){
            foreach($liste as $produit){
                $unProduit = new Produit(null,null,null,null,null);
                $unProduit->hydrate($produit);
                $result[] = $unProduit;
            }
        }
        return $result;
    }





























}