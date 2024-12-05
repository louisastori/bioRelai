<?php

$_SESSION['liste'] = new Produits(ProduitDAO::lesProduits());

$menuProduit = new Formulaire('post', 'index.php', 'menuProduit', 'menuProduit');


foreach ($_SESSION['liste']->getProduits() as $unProduit){


$menuProduit->ajouterComposantLigne($menuProduit->creerLabelFor($unProduit->getIdProduit(),$unProduit->getNomProduit()), 1);
$menuProduit->ajouterComposantLigne($menuProduit->creerLabelFor($unProduit->getIdProduit(),$unProduit->getDescriptifProduit()), 1);
$menuProduit->ajouterComposantLigne($menuProduit->creerInputTexte($unProduit->getIdProduit(), $unProduit->getIdProduit(), $unProduit->getQuantite()   , 1, '',0),1);
$menuProduit->ajouterComposantTab();
}

$menuProduit->creerFormulaire();



$itemLienPanier = new Menu("itemLienPanier");

$itemLienPanier->ajouterComposant($itemLienPanier->creerItemLien("Validation du panier" , "AdherentsPanier"));

$itemLienPanier = $itemLienPanier->creerMenu("itemLienPanier","");

/*
if(isset($_POST['submitConnex'])){

	$unUser = new Utilisateur(null,$_POST['mail'],$_POST['mdp'],null,null,null);

	$_SESSION['identification']=UtilisateurDAO::verification($unUser);

	if($_SESSION['identification']){
		$_SESSION['menuPrincipalBioRelais']="accueil";
	}
	else{
		$messageErreurConnexion = "la connexion a échoué ";
	}
}*/

if(isset($_GET['itemLienPanier']) && $_GET['itemLienPanier']=='AdherentsPanier') {
    if (isset($_POST['quantite']) && is_array($_POST['quantite'])) {
        foreach ($_POST['quantite'] as $idProduit => $quantite) {
            $quantite = filter_var($quantite, FILTER_VALIDATE_INT, ["options" => ["min_range" => 0]]);
            if ($quantite !== false) {
                commandeDAO::creationCommande($idProduit, $quantite);
            }
        }
    }

    // Après la mise à jour, redirection vers une autre page
    header("Location: index.php?page=AdherentsPanier");
    exit(); // Arrête l'exécution du script pour s'assurer que la redirection fonctionne
}




include_once 'vue/adherents/vueAdherentsAchats.php';


