<?php

require_once __DIR__ . "/../ClientRepository.php";

class ClientController {
    private ClientRepository $clientRepository;

    // Constructeur
    public function __construct() {
        $this->clientRepository = new ClientRepository();
    }

    // Page d'accueil avec toutes les commandes
    public function home() {
        $clients = $this->clientRepository->getClients();
        require_once __DIR__ . "/../View/Homecopy.php";
    }

    // Afficher une commande spécifique
    public function show(int $id) {
        $client = $this->clientRepository->getClient($id);
        
        if (!$client) {
            die("Erreur : Commande non trouvée.");
        }

        require_once __DIR__ . "/../View/ViewClient.php";
    }

    //Ajout d'un nouveau client, go to formulaire pour remplir les données

    public function create(){
        require_once __DIR__.'/../View/CreateClient.php';

    }

    public function store(){
        $client = new Client();
        $client->setNom($_POST['nom']);
        $client->setEmail($_POST['email']);
        $client->setNumero($_POST['numero']);
        $this->clientRepository->create($client);

        header('Location: ?');
    }
    public function edit($id){
        $client = $this->clientRepository->getClient($id);
        require_once __DIR__.'/../View/EditClient.php';
    }

  public function update(){
        $client = new Client();
        $client->setId($_POST['id']);
        $client->setNom($_POST['nom']);
        $client->setEmail($_POST['email']);
        $client->setNumero($_POST['numero']);
        $this->clientRepository->update($client);
        header('Location: ?');
    }
    public function delete($id){
        $this->clientRepository->delete($id);
        header('Location: ?'); 
    }

}


