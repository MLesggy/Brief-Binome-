


<h2 class="mb-4">⊕ Ajouter une nouvelle commande</h2>

<form action="?action=storeC" method="POST">
    <div>
        <label for="title">Titre :</label>
        <input type="text" id="title" name="title" required>
    </div>

    <div>
        <label for="Statut">Statut :</label>
        <select name="status" id="status">
            <option value="a-faire">A faire</option>
            <option value="en-cours">En cours</option>
            <option value="termine">Terminée</option>
        </select>
    </div>
    <button type="submit" >Ajouter</button>
</form>
<a href="?" >Retour à la liste</a>