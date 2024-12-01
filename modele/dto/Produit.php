<?php
class Produit{
    use Hydrate;
    private ?int $idProduit;
    private ?int $quantite;
    private ?string $nomProduit;
    private ?string $descreptifProduit;
    private ?string $photoProduit;



    public function __construct(?int $idProduit ,?int $quantite ,?string $nomProduit ,?string $descreptifProduit ,?string $photoProduit){
        $this->idProduit=$idProduit;
        $this->quantite=$quantite;
        $this->nomProduit=$nomProduit;
        $this->descreptifProduit=$descreptifProduit;
        $this->photoProduit=$photoProduit;
    }





    public function getIdProduit(): ?int{
        return $this->idProduit;
    }
    public function setIdProduit(int $idProduit): void{
        $this->idProduit=$idProduit;
    }

    public function getQuantite(): ?int{
        return $this->quantite;
    }
    public function setQuantite(int $quantite): void{
        $this->quantite=$quantite;
    }

    public function getNomProduit(): ?string{
        return $this->nomProduit;
    }
    public function setNomProduit(string $nomProduit): void{
        $this->nomProduit=$nomProduit;
    }

    public function getDescriptifProduit(): ?string{
        return $this->descreptifProduit;
    }
    public function setDescriptifProduit(string $descreptifProduit): void{
        $this->descreptifProduit=$descreptifProduit;
    }

    public function getPhotoProduit(): ?string{
        return $this->photoProduit;
    }
    public function setPhotoProduit(string $photoProduit): void{
        $this->photoProduit =$photoProduit;
    }
}