<?php
class UtilisateurDAO{
        
    public static function verification(Utilisateur $utilisateur){
        
        $requetePrepa = DBConnex::getInstance()->prepare("select utilisateuer.* from utilisateur where login = :login and  mdp = md5(:mdp)");


        $login = $utilisateur->getLogin();
        $mdp = $utilisateur->getMdp();

        $requetePrepa->bindParam( ":login", $login);
        $requetePrepa->bindParam( ":mdp" ,  $mdp);
        
        
       $requetePrepa->execute();
  
       return $requetePrepa->fetch();
    }




    public static function creerUtilisateur(Utilisateur $utilisateur){
        
        $requetePrepa = DBConnex::getInstance()->prepare("INSERT INTO utilisateur ('mail' ,'mdp','statut','nomUtilisateur','prenomUtilisateur')VALUES(':mail', ':mdp',':statut',':nomUtilisateur',':prenomUtilisateur')");


        $mail = $utilisateur->getMail();
        $mdp = $utilisateur->getMdp();
        $statut = $utilisateur->getStatut();
        $nomUtilisateur =$utilisateur->getNomUtilisateur();
        $prenomUtilisateur =$utilisateur->getPrenomUtilisateur();

        $requetePrepa->bindParam( ":mail", $mail);
        $requetePrepa->bindParam( ":mdp" ,  $mdp);
        $requetePrepa->bindParam(":statut", $statut);
        $requetePrepa->bindParam(":nomUtilisateur",$nomUtilisateur);
        $requetePrepa->bindParam(":prenomUtilisateur", $prenomUtilisateur);
        
        
       $requetePrepa->execute();
  
    }
}