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
                <?php if ($_SERVER['REQUEST_METHOD'] === "POST"): ?>
                    <h2>Votre message a bien été envoyé, nous vous répondrons dans les plus brefs délais</h2>
                <?php endif; ?>
                <h1>Contactez-nous</h1>
                <form action="" method="post">
                    <div class="geekzone-grid-2" style="gap: 2em;">
                        <label>
                            <span style="display: block; margin-bottom: 8px">
                                Votre nom: 
                            </span>
                            <input
                                class="geekzone-input"
                                style="width: 100%"
                                type="text" min="3" max="255"
                                name="first_name"
                                required />
                        </label>
                        <label>
                            <span style="display: block; margin-bottom: 8px">
                                Votre prénom: 
                            </span>
                            <input
                                class="geekzone-input"
                                style="width: 100%"
                                name="last_name"
                                type="text" min="3" max="255"
                                required />
                        </label>
                    </div>
                    <div class="geekzone-grid-2" style="gap: 2em">
                        <label>
                            <span style="display: block; margin-bottom: 8px">
                                Votre adresse email: 
                            </span>
                            <input
                                class="geekzone-input"
                                style="width: 100%"
                                name="email"
                                type="text" min="3" max="255"
                                required />
                        </label>
                        <label>
                            <span style="display: block; margin-bottom: 8px">
                                Votre numéro de téléphone
                            </span>
                            <input
                                class="geekzone-input"
                                style="width: 100%"
                                name="phone_number"
                                type="text" min="3" max="255"
                                required />
                        </label>
                    </div>
                    <label>
                        <span style="display: block; margin-bottom: 8px">
                            Votre message:
                        </span>
                        <textarea
                            class="geekzone-input"
                            name="message"
                            style="width: 100%; resize: vertical; min-height: 150px; max-height: 350px;"
                            type="text" min="3" max="255"
                            required></textarea>
                    </label>
                    <input class="geekzone-button" style="width: 100%; padding: 12px 16px; margin-top: 24px" type="submit" value="Envoyer" />
                </form>
            </div>
            <?php include "./composants/footer.php" ?>
        </div>
    </body>
</html>
