<?php
class UtilisateurDAO{
        
    public static function verification(Utilisateur $unUtilisateur){
        
        $requetePrepa = DBConnex::getInstance()->prepare("select utilisateurs.* from utilisateurs where mail = :mail and  mdp = md5(:mdp)");


        $mail = $unUtilisateur->getMail();
        $mdp = $unUtilisateur->getMdp();

        $requetePrepa->bindParam( ":mail", $mail);
        $requetePrepa->bindParam( ":mdp" ,  $mdp);
        
        
       $requetePrepa->execute();
  
       $requetePrepa->fetch();
       $unUser = new Utilisateur(null,null,null,null,null,null);
       $unUser->hydrate($requetePrepa->fetch(PDO::FETCH_ASSOC));
       return $unUser;
    }

    public static function creerUtilisateur(Utilisateur $unUtilisateur){
        
        $requetePrepa = DBConnex::getInstance()->prepare("INSERT INTO utilisateurs (`mail` ,`mdp`,`statut`,`nomUtilisateur`,`prenomUtilisateur`)VALUES(:mail, :mdp,:statut,:nomUtilisateur,:prenomUtilisateur)");


        $mail = $unUtilisateur->getMail();
        $mdp = $unUtilisateur->getMdp();
        $statut = $unUtilisateur->getStatut();
        $nomUtilisateur =$unUtilisateur->getNomUtilisateur();
        $prenomUtilisateur =$unUtilisateur->getPrenomUtilisateur();

        $requetePrepa->bindParam( ":mail", $mail);
        $requetePrepa->bindParam( ":mdp" ,  $mdp);
        $requetePrepa->bindParam(":statut", $statut);
        $requetePrepa->bindParam(":nomUtilisateur",$nomUtilisateur);
        $requetePrepa->bindParam(":prenomUtilisateur", $prenomUtilisateur);
        
       $requetePrepa->execute();

    }
    

    public static function updateUtilisateur(Utilisateur $unUtilisateur){
        $requetePrepa = DBConnex::getInstance()->prepare("UPDATE utilisateurs set utilisateurs.mail=:mail , utilisateurs.mdp=:mdp , utilisateurs.statut=:statut ,
        utilisateurs.nomUtilisateur=:nomUtilisateur , utilisateurs.prenomUtilisateur=:prenomUtilisateur where utilisateurs.idUtilisateur=:idUtilisateur ");

        $idUtilisateur=$unUtilisateur->getIdUtilisateur();
        $mail=$unUtilisateur->getMail();
        $mdp=$unUtilisateur->getMdp();
        $statut=$unUtilisateur->getStatut();
        $nomUtilisateur=$unUtilisateur->getNomUtilisateur();
        $prenomUtilisateur=$unUtilisateur->getPrenomUtilisateur();

        $requetePrepa->bindParam(":idUtilisateur",$idUtilisateur);
        $requetePrepa->bindParam(":mail",$mail);
        $requetePrepa->bindParam(":mdp",$mdp);

        $requetePrepa->bindParam(":statut",$statut);
        $requetePrepa->bindParam(":nomUtilisateur",$nomUtilisateur);
        $requetePrepa->bindParam(":prenomUtilisateur",$prenomUtilisateur);
    
        $requetePrepa->execute();
    }

    public static function supprimerUtilisateur(Utilisateur $unUtilisateur){

        $requetePrepa = DBConnex::getInstance()->prepare("DELETE FROM utilisateurs where utilisateurs.idUtilisateur=:idUtilisateur ");

        $idUtilisateur=$unUtilisateur->getIdUtilisateur();
        $requetePrepa->bindParam(":idUtilisateur",$idUtilisateur);
        $requetePrepa->execute();

    }



}