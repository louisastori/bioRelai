<?php
class commandeDAO{

    public static function lesCommandes($idUtilisateur){
        $result =[];
        $requetePrepa =DBConnex::getInstance()->prepare("select commandes.idCommande ,commandes.dateCommande
        from commandes ,adherents , utilisateurs
        where commandes.idAdherent =adherents.idAdherent
        AND adherents.idAdherent = utilisateurs.idUtilisateur
        AND idUtilisateur =:idUtilisateur");

       // $idUtilisateur //= $unUtilisateur->getIdUtilisateur();

        $requetePrepa->bindParam( ":idUtilisateur", $idUtilisateur);

        $requetePrepa->execute();
        $liste = $requetePrepa->fetchAll(PDO::FETCH_ASSOC);

        if(!empty($liste)){
            foreach($liste as $commande){
                $uneCommande = new Commande(null,null);
                $uneCommande->hydrate($commande);
                $result[] = $uneCommande;
            }
        }
        return $result;
    }

    function getLastId() {
        $bdd = DBConnex::getInstance(); // Connexion à la base
        $sql = "SELECT MAX(id) AS max_id FROM ma_table";
        $requete = $bdd->query($sql);
        $resultat = $requete->fetch(PDO::FETCH_ASSOC);
    
        return $resultat['max_id'] ?? 0; // Retourne 0 si aucun ID n'est trouvé
    }

    public static function creationCommande($idProduit, $quantite){

        $bdd = DBConnex::getInstance(); // Connexion à la base
        $sql = "SELECT MAX(id) AS max_id FROM lignecommande";
        $requete = $bdd->query($sql);
        $resultat = $requete->fetch(PDO::FETCH_ASSOC);
    
        $test= $resultat['max_id'] ?? 0;
        $test =$test+1;
        
        $requetePrepa =DBConnex::getInstance()->prepare("INSERT INTO lignecommande (idCommande , idProduit , quantite)
        values (:newId ,:idProduit , :quantite)");
    
        $newId = $test ;
        $requetePrepa->bindParam( ":idProduit", $idProduit);
        $requetePrepa->bindParam( ":quantite", $quantite);
        $requetePrepa->bindParam( ":newId", $newId);

        $requetePrepa->execute();
    }

    public static function laCommande($idUtilisateur,$newId){
        $result =[];
        $requetePrepa =DBConnex::getInstance()->prepare("select ligneCommande
        from commandes ,adherents , utilisateurs
        where commandes.idAdherent =adherents.idAdherent
        AND adherents.idAdherent = utilisateurs.idUtilisateur
        AND idUtilisateur =:idUtilisateur AND idCommande:newId ");

       // $idUtilisateur //= $unUtilisateur->getIdUtilisateur();

        $requetePrepa->bindParam( ":newId",$newId);
        $requetePrepa->bindParam( ":idUtilisateur", $idUtilisateur);

        $requetePrepa->execute();
        $liste = $requetePrepa->fetchAll(PDO::FETCH_ASSOC);

        if(!empty($liste)){
            foreach($liste as $commande){
                $uneCommande = new Commande(null,null);
                $uneCommande->hydrate($commande);
                $result[] = $uneCommande;
            }
        }
        return $result;
    }


    public static function confirmationCommande($idProduit, $quantite,$newId){
        
        $requetePrepa =DBConnex::getInstance()->prepare("UPDATE INTO lignecommande
        SET idCommande= :newId
        SET idProduit=:idProduit
        SET quantite =:quantite
        ");
        
    
        $requetePrepa->bindParam( ":idProduit", $idProduit);
        $requetePrepa->bindParam( ":quantite", $quantite);
        $requetePrepa->bindParam( ":newId", $newId);

        $requetePrepa->execute();
    }

    















}