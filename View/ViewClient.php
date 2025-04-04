



<h2 class="mb-4">📋 Détail client</h2>

<p><strong>Nom : </strong> <?= $client->getNom() ?></p>
<p><strong>Email: </strong> <?= $client->getEmail() ?></p>
<p><strong>Numero : </strong> <?= $client->getNumero() ?></p>


<a href="?action=edit&id=<?= $client->getId() ?>" class="btn btn-warning">Modifier la tâche</a>
<a href="?action=create&id=<?= $client->getId() ?>" class="btn btn-warning">ajouter une tâche</a>
<a href="?" class="btn btn-secondary">Retour à la liste</a>

