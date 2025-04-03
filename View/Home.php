
<h2> 📦 Liste de commande </h2>

<table>
    <thead>
        <tr>
            <th>Titre</th>
            <th>Statut</th>   
        </tr>
    </thead>
    <tbody>
    <?php foreach($commandes as $commande): ?>
            <tr>
                <td><?= htmlspecialchars($commande->getTitre()); ?></td>
                <td><?= htmlspecialchars($commande->getStatut()); ?></td>
                <td>
                    <a href="?action=view&id=<?= $commande->getIdCommande(); ?>" class="btn btn-primary btn-sm">👀 Voir</a>
                    <a href="?action=edit&id=<?= $commande->getIdCommande(); ?>" class="btn btn-warning btn-sm">✏️ Modifier</a>
                    <a onclick="return confirm('T’es sûr ?');" href="?action=delete&id=<?= $commande->getIdCommande(); ?>" class="btn btn-dark btn-sm">❌ Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>






