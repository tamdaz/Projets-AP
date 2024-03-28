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

            <div class="geekzone-container">
                <h1>À propos de nous</h1>
                <?php for ($i = 0; $i < 5; $i++): ?>
                    <p style="text-align: justify; line-height: 1.5">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                <?php endfor; ?>
            </div>
            <?php include "./composants/footer.php" ?>
        </div>
    </body>
</html>
