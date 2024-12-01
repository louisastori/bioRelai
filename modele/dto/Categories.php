<?php
class Categorie{
    private int $idCategorie;
    private string $nomCategorie;

    public function __construct(?int $idCategorie ,?string $nomCategorie){
        $this->idCategorie=$idCategorie;
        $this->nomCategorie=$nomCategorie;
    }

    public function getidCategorie(): ?int{
        return $this->idCategorie;
    }
    public function setidCategorie(int $idCategorie): void{
        $this->idCategorie = $idCategorie;
    }

    public function getNomCategorie(): ?string{
        return $this->nomCategorie;
    }
    public function setNomCategorie(string $nomCategorie): void{
        $this->nomCategorie=$nomCategorie;
    }
}