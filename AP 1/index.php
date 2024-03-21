<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="stylesheet" href="/assets/css/index.css" />

        <title>Bienvenue sur GeekZone</title>
    </head>
    <body>
        <div class="page">
            <?php include "./composants/header.php" ?>
            <?php $categories = include "./données/categories.php" ?>

            <div class="geekzone-full-screen-hero">
                <h1 style="margin: 0 0 8px 0; font-size: 64px">
                    Bienvenue sur Geekzone
                </h1>
                <p style="font-weight: regular; margin: 0; padding: 0; font-size: 24px">
                    Plongez dans l'univers des accessoires et vivez des aventures incroyables
                    avec nos super équipements.
                </p>
                <div class="geekzone-grid-5 geekzone-group-chips">
                    <?php foreach ($categories as $categorie): ?>
                        <a href="/produits.php?nom=&categorie=<?= $categorie ?>&ville=" class="geekzone-chips">
                            <?= $categorie ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php include "./composants/footer.php" ?>
        </div>
    </body>
</html>
