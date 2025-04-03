<?php

require_once __DIR__ . "/../CommandeRepository.php";

class CommandeController {
    private CommandeRepository $commandeRepository;

    // Constructeur
    public function __construct() {
        $this->commandeRepository = new CommandeRepository();
    }

    // Page d'accueil avec toutes les commandes
    public function home() {
        $commandes = $this->commandeRepository->getCommandes();
        require_once __DIR__ . "/../View/Home.php";
    }

    // Afficher une commande spécifique
    public function show(int $idCommande) {
        $commande = $this->commandeRepository->getCommande($idCommande);
        
        if (!$commande) {
            die("Erreur : Commande non trouvée.");
        }

        require_once __DIR__ . "/../View/ViewCommande.php";
    }
}


