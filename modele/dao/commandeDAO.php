<?php
class commandeDAO{

    public static function lesCommandes(Utilisateur $unUtilisateur){
        $result =[];
        $requetePrepa =DBConnex::getInstance()->prepare("select commandes.idCommande ,commandes.dateCommande
        from commandes ,adherents , utilisateurs
        where commandes.idAdherent =adherents.idAdherent
        AND adherent.idAdherent = utilisateurs.idUtilisateur
        AND idUtilisateur =");

        $idUtilisateur = $unUtilisateur->getIdUtilisateur();

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


    















}