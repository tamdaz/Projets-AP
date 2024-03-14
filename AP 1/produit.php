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
            <?php include "./composants/produit.php"; ?>

            <div class="geekzone-container">
                <?php $produit = (require "./données/produits.php")[$_GET['id'] - 1]; ?>
                
                <?php if ($_SERVER['REQUEST_METHOD'] === "POST"): ?>
                    <h2>Vous avez commandé le produit <?= $produit['nom'] ?></h2>
                <?php endif; ?>
                
                <div class="geekzone-grid-2" style="gap: 64px">
                    <img src="/assets/img/produits/<?= "{$produit['categorie']}/{$produit['image']}" ?>" width="100%" />
                    <div>
                        <h1 style="font-size: 5em; margin: 4px 0 0 0">
                            <?= number_format($produit['prix'], 2, ',', ' ') . " €" ?>
                        </h1>
                        <h2 style="font-size: 2.5em; margin: 4px 0 0 0; font-weight: normal">
                            <?= $produit['nom'] ?>
                        </h2>
                        <div style="margin-top: 16px">
                            Catégorie: <span style="background-color: #00E676; padding: 8px 32px; border-radius: 50px; color: white margin-right: 8px">
                                <?= $produit['categorie'] ?>
                            </span>
                        </div>
                        <p><?= $produit['description'] ?></p>
                        <p><?= $produit['details'] ?></p>
                        <form action="" method="post">
                            <button class="geekzone-button geekzone-button-full">Commander</button>
                        </form>
                    </div>
                </div>
                <h1 style="font-size: 3em">Autres produits</h1>
                <?php
                    $produits = require "./données/produits.php";

                    $autres_produits = array_filter($produits, function ($autre_produit) use ($produit) {
                        return
                            $autre_produit['id'] != $_GET['id'] &&
                            $produit['categorie'] === $autre_produit['categorie']
                        ;
                    });
                ?>

                <div class="geekzone-grid-3">
                    <?php foreach ($autres_produits as $produit): ?>
                        <?php echo creerProduit($produit); ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php include "./composants/footer.php" ?>
        </div>
    </body>
</html>
