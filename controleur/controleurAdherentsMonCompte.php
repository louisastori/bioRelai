<?php
$formModifUser = new Formulaire('post','index.php','formModifUser','formModifUser');

        
    $formModifUser->ajouterComposantLigne($formModifUser->creerLabel("mail:", "messageErreurMail"),2);
	$formModifUser -> ajouterComposantLigne($formModifUser -> creerInputTexte("mail","mail",$_SESSION['utilisateur']-> getMail(),1,"",0),1);
	$formModifUser->ajouterComposantTab();

	$formModifUser->ajouterComposantLigne($formModifUser->creerLabel("Mdp:", "messageErreurMdp"),2);
	$formModifUser -> ajouterComposantLigne($formModifUser -> creerInputTexte("Mdp","Mdp",$_SESSION['utilisateur']-> getMdp(),1,"",0),1);
	$formModifUser->ajouterComposantTab();

	$formModifUser->ajouterComposantLigne($formModifUser->creerLabel("statut:", "messageErreurStatut"),2);
	$formModifUser -> ajouterComposantLigne($formModifUser -> creerInputTexte("statut","statut",$_SESSION['utilisateur']-> getStatut(),1,"",0),1);
	$formModifUser->ajouterComposantTab();

	$formModifUser->ajouterComposantLigne($formModifUser->creerLabel("Nom:", "messageErreurNom"),2);
	$formModifUser -> ajouterComposantLigne($formModifUser -> creerInputTexte("nom","nom",$_SESSION['utilisateur']-> getNomUtilisateur(),1,"",0),1);
	$formModifUser->ajouterComposantTab();

	$formModifUser->ajouterComposantLigne($formModifUser->creerLabel("Prenom:", "messageErreurPrenom"),2);
	$formModifUser -> ajouterComposantLigne($formModifUser -> creerInputTexte("prenom","dateDebut",$_SESSION['utilisateur']-> getPrenomUtilisateur(),1,"",0),1);
	$formModifUser->ajouterComposantTab();

    $formModifUser->ajouterComposantLigne($formModifUser->creerInputSubmit('updateUtilisateur','updateUtilisateur','Modifier'),1);
	$formModifUser->ajouterComposantLigne($formModifUser->creerInputSubmit('supprimerUtilisateur','supprimerUtilisateur','Supprimer'),1);
	$formModifUser->ajouterComposantTab();

	$formModifUser -> creerFormulaire();

    include_once 'vue/adherents/vueAdherentsMonCompte.php';

		

    
