

<h2 class="mb-4">✏️ Modifier un client</h2>

<form action="?action=update" method="POST">
    <input type="hidden" name="id" value="<?= $client->getId() ?>">
    <div>
        <label for="nom">nom :</label>
        <input type="text" class="form-control" id="title" name="nom" value="<?= $client->getNom() ?>" required>
    </div>
    <div>
        <label for="email" class="form-label">Email :</label>
        <input type="text" class="form-control" id="title" name="email" value="<?= $client->getEmail() ?>" required>
    <div>
        <label for="numero" class="form-label">Numero :</label>
        <input type="text" class="form-control" id="title" name="numero" value="<?= $client->getNumero() ?>" required>
    </div>
    <div>

        
    <button type="submit" class="btn btn-primary">Modifier</button>
</form>

<a href="?" class="btn btn-secondary">Retour à la liste</a>


