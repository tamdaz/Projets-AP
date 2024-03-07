<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="stylesheet" href="/assets/css/index.css" />

        <title>Produit n°<?= $_GET['id'] ?> - Geekzone</title>
    </head>
    <body>
        <div class="page">
            <?php include "./composants/header.php" ?>
            <div class="geekzone-container">
                <?php $produit = (require "./données/produits.php")[$_GET['id'] - 1]; ?>
                <?php
                    $categorie = array_filter(
                        (require "./données/categories.php"),
                        fn ($val) => $val['categorie_id'] === $produit['categorie']
                    )[0];
                ?>
                
                <div class="geekzone-grid-2">
                    <img src="/assets/img/produits/<?= $categorie['libelle'] . "/" . $produit['image'] ?>" width="100%" />
                    <div>
                        <h1 style="font-size: 5em; margin: 4px 0 0 0">
                            <?= number_format($produit['prix'], 2, ',', ' ') . " €" ?>
                        </h1>
                        <h2 style="font-size: 2.5em; margin: 4px 0 0 0; font-weight: normal">
                            <?= $produit['nom'] ?>
                        </h2>
                        <div style="margin-top: 16px">
                            Catégorie: <span style="background-color: #00E676; padding: 8px 32px; border-radius: 50px; color: white; margin-right: 8px">
                                <?= $categorie['libelle'] ?>
                            </span>
                        </div>
                        <p>
                            <?= $produit['description'] ?>
                            <?= $produit['detail'] ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php include "./composants/footer.php" ?>
        </div>
    </body>
</html>
