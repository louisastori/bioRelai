<?php
Class Utilisateur{
    use Hydrate;
    private ?int idUtilisateur;
    private string mail;
    private string mdp;
    private string statut;
    private string nomUtilisateur;
    private string prenomUtilisateur;


    public function __construct(?int unIdUtilisateur ,string unMail , string unMdp , string unStatut , string unNomUtilisateur , string unPrenomUtilisateur){

        $this->idUtilisateur =$unIdUtilisateur;
        $this->mail =$unMail;
        $this->mdp=$unMdp;
        $this->statut=$unStatut;
        $this->nomUtilisateur=$unNomUtilisateur;
        $this->prenomUtilisateur=$unPrenomUtilisateur;
    }

    public function getIdUtilisateur(): ?int{
        return $this->idUtilisateur;
    }
    public function setIdUtilisateur(int $unIdUtilisateur): void{
        $this->idUtilisateur = $unIdUtilisateur;
    }

    public function getMail(): string{
        return $this->mail;
    }
    public function setMail(string $unMail): void{
        $this->mail =$unMail;
    }

    public function getMdp(): string{
        return $this->mdp;
    }
    public function setMdp( string $unMdp): void{
        $this->mdp=$unMdp;
    }

    public function getStatut(): string{
        return $this->statut;
    }
    public function setStatut(string $unStatut): void{
        $this->statut =$unStatut;
    }

    public function getNomUtilisateur(): string{
        return $this->nomUtilisateur; 
    }
    public function setNomUtilisateur (string $unNomUtilisateur): void{
        $this->nomUtilisateur = $unNomUtilisateur;
    } 

    public function getPrenomUtilisateur(): string{
        return $this->prenomUtilisateur;
    }

    public function setPrenomUtilisateur(string $unPrenomUtilisateur): void{
        $this->prenomUtilisateur =$unPrenomUtilisateur;
    }

}