<?php


if(isset($_GET['menuPrincipalBioRelais'])){
	$_SESSION['menuPrincipalBioRelais']= $_GET['menuPrincipalBioRelais'];
}
else
{
	if(!isset($_SESSION['menuPrincipalBioRelais'])){
		$_SESSION['menuPrincipalBioRelais']="accueil";
	}
}

//conexion de l'utiliasteur
$messageErreurConnexion ="";

if(isset($_POST['submitConnex'])){

	$unUtilisateur = new Utilisateur($_POST['login'],$_POST['mdp']);

	$_SESSION['identification']=UtilisateurDAO::verification($unUtilisateur);

	if($_SESSION['identification']){
		$_SESSION['menuPrincipalBioRelais']="accueil";
	}
	else{
		$messageErreurConnexion = "la connexion a échoué ";
	}
}

//creation de l'utilisateur

$messageErreurConnexion ="";

if(isset($_POST['submitInscription'])){

	$unUtilisateur = new Utilisateur($_POST['mail'],$_POST['mdp'],$_POST['statut'],$_POST['nomUtilisateur'],$_POST['prenomUtilisateur']);

	UtilisateurDAO::creerUtilisateur($unUtilisateur);
}




$menuPrincipalBioRelais = new Menu("menuPrincipalBioRelais");
if( isset($_SESSION['identification']) && $_SESSION['identification']){
	$menuPrincipalBioRelais->ajouterComposant($menuPrincipalBioRelais->creerItemLien("accueil", "accueil"));
	$menuPrincipalBioRelais->ajouterComposant($menuPrincipalBioRelais->creerItemLien("connection" , "DeConnection"));

}
else{
    $menuPrincipalBioRelais->ajouterComposant($menuPrincipalBioRelais->creerItemLien("accueil", "accueil"));
	$menuPrincipalBioRelais->ajouterComposant($menuPrincipalBioRelais->creerItemLien("créer un compte" , "inscription"));
	$menuPrincipalBioRelais->ajouterComposant($menuPrincipalBioRelais->creerItemLien("connection" , "Connexion"));

}
$menuPrincipalBioRelais = $menuPrincipalBioRelais->creerMenu("menuPrincipalBioRelais",$_SESSION['menuPrincipalBioRelais']);

include_once Dispatcher::dispatch($_SESSION['menuPrincipalBioRelais']);