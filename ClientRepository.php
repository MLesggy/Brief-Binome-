<?php 

require_once __DIR__. "/database.php";
require_once __DIR__."/Client.php";

class ClientRepository{

    public DatabaseConnection $connexion; 
   
    //constructeur 
    public function __construct()
{
    $this->connexion= new DatabaseConnection();
}
// Tableau pour selectionner toute les données clients 
public function getClients(): array 
{
    $statement= $this->connexion->getConnection()->query('SELECT * FROM client');
    $result=$statement->fetchAll(PDO::FETCH_ASSOC);
    $clients=[]; 
    foreach($result as $row ){
        $client=new Client();
        $client->setId($row['id']);
        $client->setNom($row['nom']);
        $client->setEmail($row['email']);
        $client->setNumero($row['numero']);

       $clients[]=$client; 
    }
    return $clients; 
}

//fonction pour selectionner un client en fonction de son Id
public function getClient(int $id): ?Client
{
    $statement= $this->connexion->getConnection()->prepare('SELECT * FROM client WHERE id=:id');
    $statement->execute(['id'=>$id]);
    $result = $statement->fetch();

    if(!$result){
        return NULL;
    }


$client=new Client();
        $client->setId($result['id']);
        $client->setNom($result['nom']);
        $client->setEmail($result['email']);
        $client->setNumero($result['numero']);
    return $client;

}

// Debut du CRUD client 
// Creer une commande 

public function passerCommande(Commande $commande): bool 
{
    $statement= $this->connexion->getConnection()->prepare('INSERT INTO commande (statut) VALUES (:statut)');
    return $statement->execute([
        'statut'=>$commande->getStatut()
    ]);
}

// fonction pour modifier la commmande 
public function modifierCommande(Commande $commande): bool
{
    $statement= $this->connexion->getConnection()->prepare('UPDATE commande SET statut=:statut WHERE idCommande=:idCommande');
    return $statement->execute([
        'idCommande'=>$commande->getIdCommande(),
        'statut'=>$commande->getStatut()
    ]);
}

//fonction pour supprimer la commande 
public function supprimer(int $idCommande) : bool 
{
    $statement= $this->connexion->getConnection()->prepare('DELETE FROM commande WHERE idCommande=:idCommande');
    $statement->bindParam(':idCommande', $idCommande);
    return $statement->execute();
}

}