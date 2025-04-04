<?php

require_once __DIR__ . "/../CommandeRepository.php";
require_once __DIR__.'/../ClientRepository.php';

class CommandeController {
    private CommandeRepository $commandeRepository;

    // Constructeur
    public function __construct() {
        $this->commandeRepository = new CommandeRepository();
    }

    // Page d'accueil avec toutes les commandes
    public function homeC() {
        $commandes = $this->commandeRepository->getCommandes();
        require_once __DIR__ . "/../View/Home.php";
    }

    // Afficher une commande spécifique
    public function showC($idCommande) {
        $commande = $this->commandeRepository->getCommande($idCommande);
        $client = $this->clientRepository->getClient($commande->getClientId());
        require_once __DIR__ . "/../View/ViewCommande.php";

    }


// Importation du CRUD 


// Appelle de la fonction passer commande // fonction OK
public function Ajout(){
  require_once __DIR__.'/../CreateOrder.php';
}

public function StoreC(){
    $commande = new Commande();
    $commande->setTitre($_POST['titre']);
    $commande->setStatut($_POST['statut']);
    $this->commandeRepository->Ajout($commande);
        header('Location: ?');
}

// Fonction  pour editer une commande 
public function editC($idCommande){
    $commande= $this->commandeRepository->getCommande($idCommande);
        require_once __DIR__ . '/../View/editCommande.php';
}

public function modifier(){
    {
        $commande= new Commande();
        $commande->setIdcommande($_POST['id']);
        $commande->setTitre($_POST['titre']);
        $commande->setStatut($_POST['status']);
        $this->commandeRepository->modifier($commande);

        header('Location: ?');
    }
}

// Fonction pour supprimer la commande 

public function supprimer($idCommande){
    $this->commandeRepository->supprimer($idCommande);
    header('Location: ?');
}

}

