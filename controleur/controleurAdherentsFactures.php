<?php

$_SESSION['liste'] = new Commandes(commandeDAO::lesCommandes());

$menuCommande = new Formulaire('post', 'index.php', 'menuCommande', 'menuCommande');


foreach ($_SESSION['liste']->getCommandes() as $uneCommande){


$menuCommande->ajouterComposantLigne($menuCommande->creerLabelFor($uneCommande->getIdCommande(),$uneCommande->getDateCommande()), 1);

$menuCommande->ajouterComposantTab();
$menuCommande->ajouterComposantTab();

}
$formulaireInscription->ajouterComposantLigne($formulaireInscription-> creerInputSubmit('confirmation', 'confirmation', 'Confirmation du panier'),2);

$menuCommande->creerFormulaire();


include_once 'vue/adherents/vueAdherentsFactures.php';