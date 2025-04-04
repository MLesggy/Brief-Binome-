
<h2 class="mb-4">⊕ Créer un nouveau client</h2>

<form action="?action=store" method="POST">
    <div class="mb-3">
        <label for="nom" class="form-label">Nom :</label>
        <input type="text" class="form-control" id="nom" name="nom" required>
    </div>
    <div>
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
        
        <label for="numero" class="form-label">Numéro:</label>
        <input type="text" class="form-control" id="numero" name="numero" required>
    </div>

    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>

<a href="?" class="btn btn-secondary">Retour à la liste</a>
