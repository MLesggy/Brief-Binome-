<?php

// require_once __DIR__."/database.php";
// require_once __DIR__."/ClientRepository.php";
// require_once __DIR__."/Commande.php";
// require_once __DIR__."/CommandeRepository.php";
// require_once __DIR__."/CreateOrder.php";

// $commandeRepo= new CommandeRepository();
// $commandes= $commandeRepo->getCommandes();
// $commande=$commandeRepo->getCommande(1);

// require_once __DIR__."/View/ViewCommande.php";
// require_once __DIR__."/View/Home.php";

require_once __DIR__."/controllers/CommandeControler.php";

$commandeController = new CommandeController();
$commandeController->show(1);