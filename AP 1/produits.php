<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="/assets/css/index.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>Geekzone</title>
    </head>
    <body>
        <?php $produits = require "./données/produits.php" ?>
        <?php $categories = require "./données/categories.php" ?>
        <div class="page">
            <?php include "./composants/header.php" ?>
            <div style="background-color: #00E676; width: 100%; height: 200px"></div>
            <form class="geekzone-search-box" method="GET">
                <input
                    class="geekzone-input"
                    type="text"
                    placeholder="Que voulez-vous chercher ?"
                    name="nom"
                />
                <select name="categorie" class="geekzone-input">
                    <option default value="">Filtrer par catégorie</option>
                    <?php foreach ($categories as $category): ?>
                        <option value="<?= $category['libelle'] ?>">
                            <?= $category['libelle'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <select class="geekzone-input">
                    <option default>Filtrer par boutique</option>
                </select>
                <button type="submit" class="geekzone-button">Rechercher</button>
            </form>
            <div class="geekzone-container">
                <?php include "./composants/produit.php"; ?>

                <?php
                    $produits_filtres = array_filter($produits, function ($val) use ($categories) {
						return str_starts_with(
							strtolower($val['nom']), strtolower($_GET['nom'])
						) || $val['categorie'] === intval($_GET['categorie']);
					});
                ?>

                <?php if (count($produits_filtres) !== 0): ?>
                    <div class="geekzone-grid-3">
                        <?php foreach ($produits_filtres as $produit): ?>
							<?php echo creerProduit($produit); ?>
                        <?php endforeach; ?>
                    </div>
                <?php else: ?>
                    <h1>Pas de résultats</h1>
                    <p>
                        Désolé, nous n'avons trouvé aucun produit qui correspond à votre attente. ;(
                    </p>
                <?php endif; ?>
            </div>
            <?php include "./composants/footer.php" ?>
        </div>
    </body>
</html>
