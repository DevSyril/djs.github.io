<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultation</title>
    <link rel="stylesheet" href="../CSS/reset.css">
    <link rel="stylesheet" href="../CSS/style_djs.css">
    <link rel="stylesheet" href="../fonts/fontawesome/css/all.min.css">
</head>

<body>
    <?php require_once '../includes/menu.php'; ?>
    <div class="banner_resa">
        <h1>Réservez un rendez-vous</h1>
    </div>
    <main class="resacalc">
        <h1 class="quicksand">Formulaire de prise de rendez-vous</h1>
        <h6 style="padding: 40px 0 20px 0; border-bottom: 2px solid black;">Nous nous engageons à répondre rapidement à
            tous les messages que nous recevons.</h6>
        <form action="../processing/formulaire.php" method="POST">
            <section class="resaform">
                <div>
                    <h4>Nom complet</h4>
                </div>
                <div class="resagrid">
                    <input type="text" name="name" id="name" placeholder="Nom de famille" required>
                    <input type="text" name="firstname" id="firstname" placeholder="Prénom" required>
                </div>
                <div>
                    <h4>Adresses et contact</h4>
                </div>
                <div class="resagrid">
                    <input type="email" name="email" id="email" placeholder="Adresse E-mail">
                    <input type="tel" name="telephone" id="telephone" placeholder="Numero de téléphone">
                </div>
                <div>
                    <h4>Lieu de résidence</h4>
                </div>
                <div class="resagrid">
                    <input type="text" name="city" id="city" placeholder="Ville de résidence">
                    <input type="text" name="quartier" id="quartier" placeholder="Quartier d'habitation">
                </div>
                <div>
                    <h4>Nature de l'affaire</h4>
                </div>
                <div>
                    <input type="radio" value="famille" name="natureAffaire">
                    <label for="famille">Affaires familiales</label>
                    <input type="radio" value="entreprise" name="natureAffaire">
                    <label for="entreprise">Création d'entreprises</label><br />
                    <input type="radio" value="banque" name="natureAffaire">
                    <label for="banque">Banques & Assurances</label><br />
                    <input type="radio" value="immobilier" name="natureAffaire">
                    <label for="immobilier">Immobilier</label>
                    <input type="radio" value="actesjuridiques" name="natureAffaire">
                    <label for="actesjuridiques">Rédaction d'actes juridiques</label>
                </div>
                <div>
                    <h4>Pour quand prenez-vous rendez-vous?</h4>
                </div>
                <div class="resagrid">
                    <input type="date" name="date" id="date" value="date">
                    <input type="time" name="time" id="time">
                </div>
                <div>
                    <h4>Décrivez nous un peu plus votre préoccupation</h4>
                </div>
                <div>
                    <textarea name="description" id="description" cols="30" rows="10"
                        placeholder="Dîtes nous-en plus...."></textarea>
                </div>
            </section>
            <button class="resabutton">Soumettre</button>
        </form>
    </main>
    <?php require_once '../includes/footer.php'; ?>
    <script src="/JavaScript/prog_djs.js"></script>
</body>

</html>