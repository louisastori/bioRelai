<?php

$_SESSION['liste'] = new Produits(ProduitDAO::lesProduits());

$menuProduit = new Formulaire('post', 'index.php', 'menuProduit', 'menuProduit');


foreach ($_SESSION['liste']->getProduits() as $unProduit){


$menuProduit->ajouterComposantLigne($menuProduit->creerLabelFor($unProduit->getIdProduit(),$unProduit->getNomProduit()), 1);
$menuProduit->ajouterComposantLigne($menuProduit->creerInputTexte($unProduit->getQuantite(), $unProduit->getQuantite(), ''   , 1, '',0),1);
$menuProduit->ajouterComposantTab();

}
$formulaireInscription->ajouterComposantLigne($formulaireInscription-> creerInputSubmit('confirmation', 'confirmation', 'Confirmation du panier'),2);

$menuProduit->creerFormulaire();


include_once 'vue/adherents/vueAdherentsAchats.php';