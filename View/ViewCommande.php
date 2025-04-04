<?php
var_dump($commande);
?>
<h2>📋 Détail de la commande</h2>

<p><strong>Titre : </strong> <?= $commande->getTitre() ?></p>
<p><strong>Statut : </strong> <?= $commande->getStatut() ?></p>


<a href="?action=edit&id=<?= $commande->getIdCommande() ?>" class="btn btn-warning">Modifier la commande</a>
<a href="?" class="btn btn-secondary">Home</a><br>
<a href="?action="></a>

