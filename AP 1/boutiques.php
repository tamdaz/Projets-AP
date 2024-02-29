<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="/assets/css/index.css" />
        <title>Geekzone</title>
    </head>
    <body>
        <div class="page">
            <?php include "./composants/header.php" ?>
            <div class="geekzone-container">
                <h1>Boutiques</h1>
                <?php $boutiques = require "./données/boutiques.php"; ?>
                <?php foreach($boutiques as $boutique): ?>
                    <div class="geekzone-grid-2">
                        <div>
                            <img
                                src="<?= $boutique['imageBoutique'] ?>"
                                alt="Boutique <?= $boutique['ville'] ?>"
                            />
                        </div>
                        <div>
                            <p>Adresse: <?=
                            $boutique['adresse'] ?></p>
                            <p>Code postal: <?=
                            $boutique['codePostal'] ?></p>
                            <p>Ville: <?=
                            $boutique['ville'] ?></p>
                            <p>Numéro de téléphone: <?=
                            $boutique['numeroTelephone'] ?></p>
                            <p>Horaire: <?=
                            $boutique['horaire'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php include "./composants/footer.php" ?>
        </div>
    </body>
</html>