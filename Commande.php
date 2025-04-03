<?php

require_once __DIR__. "/database.php";
class Commande{
    private int $idCommande; 
    private string $statut;
    private string $titre;

    //constructeur

    public function __construct(string $statut = "", string $titre = "") {
        $this->statut = $statut;
        $this->titre = $titre;
    }
    
// getter 
public function getIdCommande(): int
    {
        return $this->idCommande;
    }

    public function getStatut(): string
    {
        return $this->statut;
    }
    public function getTitre(): string
    {
        return $this->titre;
    }
// setter
public function setIdcommande(int $idCommande): void
    {
        $this->idCommande = $idCommande;
    }
    public function setStatut(string $statut): void
    {
        $this->statut = htmlspecialchars($statut);
    }
    public function setTitre(string $titre): void
    {
        $this->titre=htmlspecialchars($titre);
    }
}