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
        <?php $villes = require "./données/villes.php" ?>

        <div class="page">
            <?php include "./composants/header.php" ?>
            <div style="background-color: #00E676; width: 100%; height: 200px"></div>
            <?php include "./inclure/recherche.php" ?>
            <div class="geekzone-container">
                <?php include "./composants/produit.php"; ?>
                <?php include "./inclure/fonctions/filtre.php" ?>

                <?php if (count($produits_filtres) !== 0): ?>
                    <div class="geekzone-grid-3">
                        <?php foreach ($produits_filtres as $produit): ?>
                            <?php echo creerProduit($produit); ?>
                        <?php endforeach; ?>
                    </div>
                <?php else: ?>
                    <h1>Pas de résultats</h1>
                    <p>
                        Désolé, nous n'avons trouvé aucun produit qui correspond à vos attentes ;(
                    </p>
                <?php endif; ?>
            </div>
            <?php include "./composants/footer.php" ?>
        </div>
    </body>
</html>
