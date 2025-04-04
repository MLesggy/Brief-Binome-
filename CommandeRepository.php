<?php

require_once __DIR__. "/database.php";
require_once __DIR__."/Commande.php";

class CommandeRepository{

    public DatabaseConnection $connexion; 
   
    //constructeur 
    public function __construct()
{
    $this->connexion= new DatabaseConnection();
}
// Tableau pour selectionner toute les commandes 
public function getCommandes(): array 
{
    $statement= $this->connexion->getConnection()->query('SELECT * FROM commande ');
    $result=$statement->fetchAll();
    $commandes=[]; 
    foreach($result as $row ){
        $commande=new Commande();
        $commande->setIdCommande($row['idCommande']);
        $commande->setTitre($row['titre']);
        $commande->setStatut($row['statut']);
        $commande->setClientId($row['client_id']);
    
      

       $commandes[]=$commande; 
    }
    return $commandes; 
}
// recuperer les clients en fonction de leur id 
public function GetCommandeByIdClient(int $client_id){
    $statement= $this->connexion->getConnection()->prepare('SELECT * FROM commande WHERE client_id=:client_id');
    $statement->execute(['client_id'=>$client_id]);
}




//fonction pour selectionner une commande en fonction de son Id
public function getCommande( $idCommande): ?Commande
{
    $statement= $this->connexion->getConnection()->prepare('SELECT * FROM commande WHERE idCommande=:idCommande');
    $statement->execute(['idCommande'=>$idCommande]);
    $result = $statement->fetch();


    if(!$result){
        return NULL;
    }


$commande=new Commande();
        $commande->setIdCommande($result['idCommande']);
        $commande->setStatut($result['statut']);
        $commande->setTitre($result['titre']);
       
    return $commande;

}

// Debut du CRUD commande
// Creer une commande 

public function Ajout(Commande $commande): bool 
{
    $statement= $this->connexion->getConnection()->prepare('INSERT INTO commande (statut,titre) VALUES (:statut,:titre)');
    return $statement->execute([
        'statut'=>$commande->getStatut(),
        'titre'=>$commande->getTitre()
    ]);
}

// fonction pour modifier la commmande 
public function modifier(Commande $commande): bool
{
    $statement= $this->connexion->getConnection()->prepare('UPDATE commande SET statut=:statut, titre=:titre WHERE idCommande=:idCommande');
    return $statement->execute([
        'idCommande'=>$commande->getIdCommande(),
        'statut'=>$commande->getStatut(),
        'titre'=>$commande->getTitre()
    ]);
}

//fonction pour supprimer la commande 
public function supprimer( $idCommande) : bool 
{
    $statement= $this->connexion->getConnection()->prepare('DELETE FROM commande WHERE idCommande=:idCommande');
    
    $statement->bindParam(':idCommande', $idCommande);

    return $statement->execute();
}

}