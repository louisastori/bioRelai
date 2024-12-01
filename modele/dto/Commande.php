<?php
class Commande{
    use Hydrate;
    private int $idCommande;
    private string $dateCommande;

    public function __construct(?int $idCommande , ?string $dateCommande){
        $this->idCommande=$idCommande;
        $this->dateCommande=$dateCommande;
    }

    public function getIdCommande(): ?int{
        return $this->idCommande;
    }
    public function setIdCommande(int $idCommande): void{
        $this->idCommande=$idCommande;
    }

    public function getDateCommande(): ?string{
        return $this->dateCommande;
    }

    public function setDateCommande(string $dateCommande): void{
        $this->dateCommande=$dateCommande;
    }
}