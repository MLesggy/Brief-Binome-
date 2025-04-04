<?php 



require_once __DIR__.'/controllers/ClientController.php';


$clientControler = new ClientController();

$action = $_GET['action'] ?? 'index'; // Si $_GET['action'] est null ou vide, alors on renvoi index. Sinon on renvoi $_GET['action']
$id = $_GET['id'] ?? null;

switch ($action) {
    case 'view':
        $clientControler->show($id);
        break;
    case 'create':
        $clientControler->create();
        break;
    case 'index':
        $clientControler->home();
        break;
    case 'store':
        $clientControler->store();
        break;
    case 'edit':
        $clientControler->edit($id);
        break;
    case 'update':
        $clientControler->update();
        break;
    case 'delete':
        $clientControler->delete($id);
        break;
    }

    

//     $CommandeControler = new CommandeController();

// // $action = $_GET['action'] ?? 'index'; // Si $_GET['action'] est null ou vide, alors on renvoi index. Sinon on renvoi $_GET['action']
// // $id = $_GET['id'] ?? null;

// // switch ($action) {
// //     case 'view':
// //         $CommandeControler->showC($id);
// //         break;
// //     case 'create':
// //         $CommandeControler->Ajout();
// //         break;
// //     case 'index':
// //         $CommandeControler->homeC();
// //         break;
// //     case 'store':
// //         $CommandeControler->StoreC();
// //         break;
// //     case 'edit':
// //         $CommandeControler->editC($id);
// //         break;
// //     case 'modifier':
// //         $CommandeControler->modifier();
// //         break;
// //     case 'delete':
// //         $CommandeControler->supprimer($id);
// //         break;
// //     }

