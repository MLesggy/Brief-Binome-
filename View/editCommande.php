

<h2 class="mb-4">✏️ Modifier une commande</h2>

<form action="?action=modifier" method="POST">
    <input type="hidden" name="id" value="<?= $commande->getIdCommande() ?>">
    <div>
        <label for="nom">Titre :</label>
        <input type="text" class="form-control" id="title" name="titre" value="<?= $commande->getTitre() ?>" required>
    </div>
    <label for="Statut" class="form-label">Statut :</label>
  <?php  $status= $commande->getStatut(); ?>
        <select class="form-control" name="status" id="status">
            <option <?= $status == 'A faire' ? 'selected' : '' ?> value="A faire">A faire</option>
            <option <?= $status == 'En cours' ? 'selected' : '' ?> value="En cours">En cours</option>
            <option <?= $status == 'Terminée' ? 'selected' : '' ?> value="Terminée">Terminée</option>
        </select>
    </div>

        
    <button type="submit" class="btn btn-primary">Modifier</button>
</form>

<a href="?" class="btn btn-secondary">Retour à la liste</a>