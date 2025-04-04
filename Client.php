<?php 

class Client{
    //attribut 
    private int $id; 
    private string $nom;
    private string $email; 
    private string $numero;

// constructeur 
/*public function __construct() {
    self::$compteur++; // Incrémentation du compteur
    $this->id = self::$compteur;
}*/
//methode 

//getter 
public function getId(): int
    {
        return $this->id;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
    public function getNumero(): string
    {
        return $this->numero;
    }

//setter 
public function setId( $id): void
    {
        $this->id =$id;
    }
    public function setNom(string $nom): void
    {
        $this->nom = htmlspecialchars($nom) ;
    }
    public function setEmail(string $email): void
    {
        $this->email = htmlspecialchars($email);
    }
    public function setNumero(string $numero): void
    {
        $this->numero = htmlspecialchars($numero);
    }


}