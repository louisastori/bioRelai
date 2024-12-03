<?php

$_SESSION['liste'] = new Commandes(commandeDAO::lesCommandes($_SESSION['identification']-> getIdUtilisateur()));

$menuCommande = new Formulaire('post', 'index.php', 'menuCommande', 'menuCommande');


foreach ($_SESSION['liste']->getCommandes() as $uneCommande){


$menuCommande->ajouterComposantLigne($menuCommande->creerLabelFor($uneCommande->getIdCommande(),$uneCommande->getDateCommande()), 1);

$menuCommande->ajouterComposantTab();
$menuCommande->ajouterComposantTab();

}


$menuCommande->creerFormulaire();


include_once 'vue/adherents/vueAdherentsFactures.php';