<?php

$formulaireInscription = new Formulaire('post', 'index.php', 'fInscription', 'fInscription');
	
	$formulaireInscription->ajouterComposantLigne($formulaireInscription->creerLabelFor('mail', 'mail :'), 1);
	$formulaireInscription->ajouterComposantLigne($formulaireInscription->creerInputTexte('mail', 'mail', ''   , 1, '',0),1);
	$formulaireInscription->ajouterComposantTab();
	
	$formulaireInscription->ajouterComposantLigne($formulaireInscription->creerLabelFor('mdp', 'Mot de passe :'), 1);
	$formulaireInscription->ajouterComposantLigne($formulaireInscription->creerInputPass('mdp', 'mdp', '' ,1),1);
	$formulaireInscription->ajouterComposantTab();

	$formulaireInscription->ajouterComposantLigne($formulaireInscription->creerLabelFor('statut', 'statut :'), 1);
	$formulaireInscription->ajouterComposantLigne($formulaireInscription->creerInputTexte('statut', 'statut', '' ,1, '',0),1);
	$formulaireInscription->ajouterComposantTab();

	$formulaireInscription->ajouterComposantLigne($formulaireInscription->creerLabelFor('nomUtilisateur', 'nom:'), 1);
	$formulaireInscription->ajouterComposantLigne($formulaireInscription->creerInputTexte('nomUtilisateur', 'nomUtilisateur', '' ,1, '',0),1);
	$formulaireInscription->ajouterComposantTab();

	$formulaireInscription->ajouterComposantLigne($formulaireInscription->creerLabelFor('prenomUtilisateur', 'prenom :'), 1);
	$formulaireInscription->ajouterComposantLigne($formulaireInscription->creerInputTexte('prenomUtilisateur', 'prenomUtilisateur', '' ,1, '',0),1);
	$formulaireInscription->ajouterComposantTab();
	
	$formulaireInscription->ajouterComposantLigne($formulaireInscription-> creerInputSubmit('submitInscription', 'submitInscription', 'Inscription'),2);
	$formulaireInscription->ajouterComposantTab();
	
	$formulaireInscription->ajouterComposantLigne($formulaireInscription->creerLabel($messageErreurConnexion, "messageErreurConnexion"),2);
	$formulaireInscription->ajouterComposantTab();

	$formulaireInscription->creerFormulaire();

    include_once 'vue/visiteurs/vueInscription.php';
	