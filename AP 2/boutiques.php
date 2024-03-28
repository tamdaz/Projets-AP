<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="/assets/css/index.css" />
        <title>Geekzone - Boutiques</title>
    </head>
    <body>
        <div class="page">
            <?php include "./composants/header.php" ?>
            <div class="geekzone-container">
                <?php include "./inclure/fonctions/boutique.php" ?>
                <h1>Boutiques</h1>
                <?php foreach(getBoutiqueInfos() as $boutique): ?>
                    <div class="geekzone-grid-2">
                        <div>
                            <img
                                src="/stockage/boutiques/<?= $boutique['image'] ?>"
                                alt="Boutique <?= $boutique['ville'] ?>"
                            />
                        </div>
                        <div>
                            <ul>
                                <li>
                                    <p>Adresse: <?= $boutique['rue'] ?></p>
                                </li>
                                <li>
                                    <p>Code postal: <?= $boutique['cp'] ?></p>
                                </li>
                                <li>
                                    <p>Ville: <?= $boutique['ville'] ?></p>
                                </li>
                                <li>
                                    <p>Numéro de téléphone: <?= $boutique['telephone'] ?></p>
                                </li>
                                <li>
                                    <p>Horaire: <?= $boutique['horaires'] ?></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php include "./composants/footer.php" ?>
        </div>
    </body>
</html>