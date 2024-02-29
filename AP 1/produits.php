<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="/assets/css/index.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>Geekzone</title>
    </head>
    <body>
        <div class="page">
            <?php include "./composants/header.php" ?>
            <div style="background-color: #00E676; width: 100%; height: 200px"></div>
            <div class="geekzone-search-box">
                <input class="geekzone-input" type="text" placeholder="Que voulez-vous chercher ?" />
                <select class="geekzone-input">
                    <option default>Filtrer par catégorie</option>
                </select>
                <select class="geekzone-input">
                    <option default>Filtrer par ville</option>
                </select>
                <button class="geekzone-button">Rechercher</button>
            </div>
            <div class="geekzone-container">
                <?php include "./composants/produit.php"; ?>
                <?php $produits = require "./données/produits.php" ?>

                <div class="geekzone-grid-3">
                    <?php foreach ($produits as $produit): ?>
                        <?php echo creerProduit($produit) ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php include "./composants/footer.php" ?>
        </div>
    </body>
</html>
