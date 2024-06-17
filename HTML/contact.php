<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="../CSS/reset.css">
    <link rel="stylesheet" href="../CSS/style_djs.css">
    <link rel="stylesheet" href="../fonts/fontawesome/css/all.min.css">
</head>

<body>
    <?php require_once '../includes/menu.php'; ?>
    <div class="banner_contact">
        <h1>Contactez-nous</h1>
    </div>
    <main class="contactpagecontent">
        <section class="firt_contact_zone">
            <div>
                <h2>Foire aux Questions</h2>
                <div class="faq">
                    <details>
                        <summary><label for="">Quels types de services juridiques proposez-vous ?</label></summary>
                        <p>Nous proposons une gamme complète de services juridiques, notamment l'assistance juridique
                            pour la création d'entreprises, la rédaction d'actes juridiques, la gestion d'immeubles, les
                            conseils juridiques personnalisés et bien plus encore.</p>
                    </details>
                    <details>
                        <summary><label for="">Stage professionnel ou stage étudiant?</label></summary>
                        <p>Nos stages professionnels s'adressent aux praticiens du droit et aux professionnels en
                            reconversion, offrant une expérience pratique et des missions variées. Les stages étudiants
                            sont destinés aux étudiants en droit pour acquérir une expérience pratique et développer
                            leurs compétences sous la supervision de professionnels expérimentés.</p>
                    </details>
                    <details>
                        <summary><label for="">Comment bénéficier de vos services d'assistance juridique ?</label>
                        </summary>
                        <p>Pour bénéficier de nos services d'assistance juridique, il vous suffit de prendre rendez-vous
                            avec notre équipe via notre formulaire en ligne ou en nous contactant directement par
                            téléphone ou par e-mail. Nous serons ravis de discuter de vos besoins juridiques et de vous
                            proposer des solutions adaptées.</p>
                    </details>
                    <details>
                        <summary><label for="">Quelles sont vos tarifications pour les services juridiques ?</label>
                        </summary>
                        <p>Nos tarifications varient en fonction du type de service juridique requis et de la complexité
                            de la demande. Nous proposons des consultations initiales gratuites pour évaluer vos besoins
                            et vous fournir un devis détaillé avant toute intervention.</p>
                    </details>
                    <details>
                        <summary><label for="">Comment puis-je postuler pour un stage ?</label></summary>
                        <p>Pour postuler à un stage chez nous, veuillez consulter notre section "Offres de stage" sur
                            notre site web à la page d'accueil où vous trouverez les offres disponibles. Vous pouvez
                            ensuite soumettre votre candidature en ligne en suivant les instructions fournies.</p>
                    </details>
                </div>
            </div>
            <div class="location">
                <div class="image_du_bureau" data-aos="zoom-in">
                    <img src="/Images/centre-cbd-photographie-aerienne-nouvelle-ville-qianjiang-fuzhou_91566-832.avif"
                        alt="">
                </div>
                <p>Vous nous trouverez à Lomé, dans le quartier de Djifa-Kpota, non loin de la station Total du quartier
                    portant le même nom, tout juste derrière l'Eglise des Assemblées de Dieu. <br /><br />Nous sommes
                    ouverts du Lundi au Samedi de 07h à 18h. Vous pouvez directement nous contacter en nous envoyant un
                    message ou remplir le formulaire de réservation pour prendre rendez-vous.</p>
                <div class="image_localisation">
                    <img src="/Images/carte-metro-geometrique-pinpoint_23-2148232426.jpg" alt="">
                </div>
            </div>
        </section>
        <section class="contactform">
            <div class="formcalque">
                <h3 class="quicksand">Vous désirez nous envoyer un message</h3>
                <p>Nous nous engageons à répondre rapidement à tous les messages que nous recevons.</p>
                <form action="../processing/message.php" method="POST">
                    <div class="formgrid">
                        <div class="formpart">
                            <label for="name">Nom de famille</label><br />
                            <input type="text" name="name" id="name" required>
                        </div class="formpart">
                        <div class="formpartbis">
                            <label for="firstname">Prénoms</label><br />
                            <input type="text" name="firstname" id="firstname" required>
                        </div>
                        <div class="formpart">
                            <label for="phone_number">Numero de téléphone</label><br />
                            <input type="tel" name="phone_number" id="phone_number" required><br /><br><br />
                            <label for="email">Adresse e-mail</label><br />
                            <input type="email" name="email" id="email">
                        </div>
                        <div class="formpart">
                            <label for="message">Message</label><br />
                            <textarea name="message" id="message" cols="30" rows="9" required></textarea>
                        </div>
                    </div>
                    <div class="buttonsend">
                        <button class="submit_button">Envoyer</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <?php require_once '../includes/footer.php'; ?>
    <script src="/JavaScript/prog_djs.js"></script>
</body>

</html>