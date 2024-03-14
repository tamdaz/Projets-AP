<form class="geekzone-search-box" method="GET">
    <input
        class="geekzone-input"
        type="text"
        placeholder="Que voulez-vous chercher ?"
        name="nom"
        value="<?= $_GET['nom'] ?>"
    />
    <select name="categorie" class="geekzone-input">
        <option default value="">Filtrer par catégorie</option>
        <?php foreach ($categories as $categorie): ?>
            <?php if ($categorie === $_GET['categorie']): ?>
                <option value="<?= $categorie ?>" selected>
                    <?= $categorie ?>
                </option>
            <?php else: ?>
                <option value="<?= $categorie ?>">
                    <?= $categorie ?>
                </option>
            <?php endif; ?>
        <?php endforeach; ?>
    </select>
    <select class="geekzone-input" name="ville">
        <option default value="">Trier par ville</option>
        <?php foreach ($villes as $ville): ?>
            <?php if ($ville === $_GET['ville']): ?>
                <option value="<?= $ville ?>" selected>
                    <?= $ville ?>
                </option>
            <?php else: ?>
                <option value="<?= $ville ?>">
                    <?= $ville ?>
                </option>
            <?php endif; ?>
        <?php endforeach; ?>
    </select>
    <button type="submit" class="geekzone-button">Rechercher</button>
</form>