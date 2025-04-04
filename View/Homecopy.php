<h2> 📦 Liste des clients </h2>

<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nom </th>
            <th>Email</th>
            <th>Numero</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($clients as $client): ?>
            <tr>
                <td><?php echo $client->getId(); ?></td>
                <td><a href="?action=view&id=<?php echo $client->getId() ?>"><?php echo $client->getNom(); ?></a></td>
                <td><?= htmlspecialchars($client->getEmail()); ?></td>
                <td><?= htmlspecialchars($client->getNumero()); ?></td>
                <td>
                    <a href="?action=view&id=<?= $client->getId() ?>" class="btn btn-primary btn-sm">👀 Voir</a>
                    
                     <a href="?action=edit&id=<?=$client->getId() ?>" class="btn btn-warning btn-sm">✏️ Modifier</a>
                    <a onclick="return confirm('T’es sûr ?');"  href="?action=delete&id=<?=$client->getId()?>" class="btn btn-dark btn-sm">❌ Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>

</table>
<a href="?action=create" class="btn btn-warning btn-sm">✏️ Ajouter</a>