<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil | Dispensaire Juridique Social</title>
    <link rel="stylesheet" href="./CSS/reset.css">
    <link rel="stylesheet" href="./CSS/style_djs.css">
    <script src="./JavaScript/prog_djs.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</head>

<body>
    <?php require_once 'includes/menu.php'; ?>
    <?php
    if (isset($_GET['message']) && $_GET['message'] == 'success') {
        echo "<script>alert('Votre message a été envoyé avec succès. Vous aurez bientôt une réponse!');</script>";
    }

    if (isset($_GET['formulaire']) && $_GET['formulaire'] == 'success') {
        echo "<script>alert(\"Votre demande de rendez-vous a été effectué avec succès. Vous aurez bientôt une réponse!\");</script>";
    }
    ?>
    <main>
        <section class="main_banner">
            <div class="calque">
                <div></div>
                <div class="right_banner">
                    <h1>Entrez dans le sanctuaire de la justice</h1>
                    <table>
                        <tr>
                            <td width="150px" height="10px" class="home-line"></td>
                            <td width="20px"></td>
                            <td width="150px" height="10px" class="home-line"></td>
                        </tr>
                    </table>
                    <h3>
                        Découvrez notre cabinet juridique dévoué à résoudre chaque dossier avec efficacité et à répondre
                        à chaque question, grâce à notre équipe experte et passionnée par le droit.</h3>
                    <a href="./HTML/consultation.html"><button class="home_cta1">Consultation</button></a>
                    <a href="./HTML/A_propos.html"><button class="home_cta2">Notre histoire</button></a>
                </div>
            </div>
        </section>
        <div class="skills" data-aos="fade-up" data-aos-duration="2000">
            <div class="skillsfull">
                <img src="./Icônes/icons8-scales-32.png" alt="">
                <p><span id="card-title">Justice précise, solutions efficaces</span><br /><br />Notre engagement :
                    fournir des réponses juridiques précises et des solutions efficaces pour résoudre vos problèmes.</p>
            </div>
            <div class="skillsfull">
                <img src="./Icônes/icons8-scales-32.png" alt="">
                <p><span id="card-title">Droit éclairé, résolutions équitables.</span><br /><br />Appliquer une
                    expertise juridique éclairée pour aboutir à des résolutions équitables et satisfaisantes.
                </p>
            </div>
            <div class="skillsfull">
                <img src="./Icônes/icons8-scales-32.png" alt="">
                <p><span id="card-title">Partenaires de confiance</span><br /><br />Etre vos partenaires de confiance
                    dans le domaine juridique, vous garantissant des résultats tangibles pour vos affaires.
                </p>
            </div>
            <div class="skillsfull">
                <img src="./Icônes/icons8-scales-32.png" alt="">
                <p><span id="card-title">Excellence juridique, tranquillité d'esprit</span><br /><br />Offrir une
                    excellence juridique pour vous assurer une tranquillité d'esprit dans toutes vos démarches légales.
                </p>
            </div>
        </div>
        <h2 class="home_service_title" data-aos="fade-up">De quoi avez-vous besoin?</h2>
        <div class="home_services">
            <div class="services" data-aos="fade-right" data-aos-duration="3000">
                <img src="./Images/main-signature-du-contrat-entreprise_53876-65436.jpg" alt="">
                <div>
                    <h3>Rédaction d'actes juridiques</h3>
                    <p>Notre service d'assistance juridique se distingue par son expertise dans la rédaction méticuleuse
                        et professionnelle d'actes juridiques de tout type, que ce soit des contrats, des accords, des
                        conventions ou des documents légaux complexes. Nous veillons à ce que chaque terme et chaque
                        clause soit soigneusement rédigé pour garantir la précision juridique, la conformité aux normes
                        légales en vigueur et la clarté nécessaire à la compréhension de toutes les parties concernées.
                        Notre équipe d'experts juridiques travaille en étroite collaboration avec nos clients pour
                        comprendre leurs besoins spécifiques, rédiger des documents adaptés à leur situation et assurer
                        une exécution sans faille de chaque acte juridique, offrant ainsi une tranquillité d'esprit et
                        une protection juridique solide.</p>
                    <a href="./HTML/specialités.html"><button class="service_button">En savoir plus</button></a>
                </div>
            </div>
            <div class="services" data-aos="fade-left" data-aos-duration="3000">
                <div>
                    <h3>Gestion d'Immeubles</h3>
                    <p>Notre savoir-faire en matière de gestion d'immeubles se distingue par une approche proactive et
                        efficace, où chaque aspect de la gestion est soigneusement pris en charge pour garantir la
                        valeur et la rentabilité de vos biens immobiliers. De la maintenance régulière à la gestion des
                        locataires, en passant par la gestion financière et la conformité réglementaire, notre équipe
                        dédiée assure une gestion transparente et fiable. Nous nous engageons à maximiser vos rendements
                        tout en offrant un environnement sûr et confortable à vos locataires, pour une tranquillité
                        d'esprit totale dans la gestion de votre portefeuille immobilier. Faites-nous confiance pour une
                        gestion professionnelle et personnalisée, adaptée à vos besoins spécifiques, et laissez-nous
                        vous aider à tirer le meilleur parti de vos investissements immobiliers.</p>
                    <a href="./HTML/specialités.html"><button class="service_button">En savoir plus</button></a>
                </div>
                <img src="./Images/modele-maison-villa-cle-dessin-retro-bureau-concept-vente-immobilier.jpg" alt=""
                    class="droit">
            </div>
            <div class="services" data-aos="fade-right" data-aos-duration="3000">
                <img src="./Images/paysage-immeubles-grande-hauteur-rue-ville-qingdao_1417-11486.jpg" alt="">
                <div>
                    <h3>Création d'Entreprises</h3>
                    <p>Notre service d'assistance juridique pour la création d'entreprises est votre partenaire
                        stratégique dès le début de votre parcours entrepreneurial. Nous analysons vos objectifs, vous
                        aidons à choisir la forme juridique appropriée et rédigeons tous les documents nécessaires, tels
                        que les statuts et les contrats commerciaux, en veillant à leur conformité et à leur adaptation
                        à vos besoins. Nous fournissons également des conseils sur les aspects fiscaux, les droits de
                        propriété intellectuelle et d'autres questions juridiques cruciales. En optant pour notre
                        service, vous bénéficiez d'une expertise pointue et d'un accompagnement personnalisé pour
                        assurer le succès et la pérennité de votre entreprise.</p>
                    <a href="./HTML/specialités.html"><button class="service_button">En savoir plus</button></a>
                </div>
            </div>
            <div class="services" data-aos="fade-left" data-aos-duration="3000">
                <div>
                    <h3>Assistance & Conseils juridiques</h3>
                    <p>Nous nous engageons à être votre partenaire juridique de confiance pour toutes les questions et
                        défis juridiques auxquels vous pourriez être confronté. Notre équipe d'experts juridiques
                        spécialisés dans divers domaines du droit est là pour analyser minutieusement vos problèmes,
                        vous fournir des conseils stratégiques et éclairés, et élaborer des solutions sur mesure qui
                        répondent à vos besoins spécifiques.
                        Que ce soit pour la rédaction et l'examen de contrats, la résolution de litiges, la protection
                        des droits de propriété intellectuelle, la conformité réglementaire ou toute autre question
                        juridique, nous sommes là pour vous accompagner à chaque étape. Nous mettons un point d'honneur
                        à fournir des conseils juridiques précis, fiables et pragmatiques, afin que vous puissiez
                        prendre des décisions éclairées et protéger vos intérêts de manière efficace.
                    </p>
                    <a href="./HTML/specialités.html"><button class="service_button">En savoir plus</button></a>
                </div>
                <img src="./Images/femme-afro-americaine-pointant-document-pres-dame-stylo-table_23-2148042657.jpg"
                    alt="" class="droit">
            </div>
        </div>
        <section class="stage_home">
            <div class="stage_text">
                <h3>Nos offres de stage</h3>
                <p>
                    Nos stages offrent une immersion complète dans la pratique du droit, avec des missions variées et
                    stimulantes qui permettent d'explorer différents aspects du métier d'avocat ou de juriste. Que vous
                    soyez en début de carrière ou en reconversion, notre programme de stages vous offre l'opportunité
                    d'apprendre auprès de professionnels expérimentés, d'acquérir des compétences pratiques essentielles
                    et de développer votre réseau professionnel dans le secteur juridique. Rejoignez-nous pour une
                    expérience de stage enrichissante et formatrice qui vous préparera à une carrière réussie dans le
                    monde du droit.
                    <br />
                    <a href="./HTML/contact.html"><button class="service_button">Commencer</button></a>
                </p>
            </div>
            <img src="./Images/lecture-affaire-importante-photo-jeune-avocat-lisant-livre-au-travail_590464-63145.avif"
                alt="" class="stage_image">
        </section>
    </main>
    <h3 class="testimonials_title" data-aos="zoom-in" data-aos-duration="2000">Ne nous croyez pas, croyez-lez!</h3>
    <section class="testimonials_quadrant">
        <div class="testimonials" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="350">
            <img src="./Images/designer-industriel-travaillant-modele-3d_23-2149370101.jpg" alt="">
            <div class="temoignages">
                <h3>Kodjogan Damaz</h3>
                <p>Je suis extrêmement reconnaissant envers le Dispensaire Juridique Social pour leur expertise
                    inestimable dans la création de mon entreprise. Leur équipe m'a guidé à travers chaque étape du
                    processus, depuis le choix de la structure juridique la plus adaptée jusqu'à la rédaction des
                    documents juridiques essentiels. Grâce à leur soutien professionnel et personnalisé, j'ai pu
                    démarrer mon activité en toute confiance et avec une compréhension approfondie de mes obligations
                    légales. Je recommande vivement leurs services à tous ceux qui aspirent à lancer leur entreprise sur
                    des bases solides. </p>
            </div>
        </div>
        <div class="testimonials" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="650">
            <img src="./Images/heureuse-femme-africaine-veste-jaune_23-2148747945.jpg" alt="">
            <div class="temoignages">
                <h3>Gadielle Nomagnon</h3>
                <p>La gestion de mon portefeuille immobilier par le Dispensaire Juridique Social a dépassé toutes mes
                    attente. Leur approche proactive a considérablement optimisé la rentabilité et la valeur de mes
                    biens. Leur équipe a géré efficacement chaque aspect, de la maintenance régulière à la gestion des
                    locataires et des finances. Grâce à leur professionnalisme et leur dévouement, je me sens en
                    sécurité sachant que mes biens sont entre de bonnes mains. Je les recommande chaudement à tous les
                    propriétaires d'immeubles cherchant une gestion de qualité et une tranquillité d'esprit.</p>
            </div>
        </div>
        <div class="testimonials" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="850">
            <img src="./Images/hotesse-air-coup-moyen-posant_23-2150312701.avif" alt="">
            <div class="temoignages">
                <h3>Geovanie Adanlete</h3>
                <p>Mon expérience avec le Dispensaire Juridique Social dans le domaine de l'assistance et des conseils
                    juridiques a été exceptionnelle. Leur équipe a démontré une expertise approfondie dans tous les
                    aspects du droit qui concernent mon entreprise, fournissant des solutions stratégiques et des
                    conseils éclairés pour résoudre mes problèmes juridiques. Leur approche personnalisée et leur
                    disponibilité ont renforcé ma confiance en leur capacité à protéger mes intérêts et à naviguer avec
                    succès dans un environnement juridique complexe. Je ne saurai que les recommander à tous...</p>
            </div>
        </div>
    </section>
    <section>
        <h3 class="blog_titre" data-aos="fade-right" data-aos-duration="2000">Consultez nos dernières actualités</h3>
        <div class="home_blog" data-aos="fade-left" data-aos-duration="3000">
            <div class="articleblog">
                <div>
                    <img src="./Images/concept-droit-echelles-justice-livre_218381-5063.jpg" alt="">
                </div>
                <div class="textblog">
                    <h4>Atualité du jour</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus molestias ad quae, quis autem
                        itaque dolorem, at hic natus facilis, porro vel error libero iure reiciendis sint amet voluptas
                        illum.
                        Maiores, dolore maxime? p>
                </div>
            </div>
            <div class="articleblog">
                <div>
                    <img src="./Images/concept-droit-echelles-justice-livre_218381-5063.jpg" alt="">
                </div>
                <div class="textblog">
                    <h4>Atualité du jour</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus molestias ad quae, quis autem
                        itaque dolorem, at hic natus facilis, porro vel error libero iure reiciendis sint amet voluptas
                        illum.
                        Maiores, dolore maxime?</p>
                </div>
            </div>
            <div class="articleblog">
                <div>
                    <img src="./Images/concept-droit-echelles-justice-livre_218381-5063.jpg" alt="">
                </div>
                <div class="textblog">
                    <h4>Atualité du jour</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus molestias ad quae, quis autem
                        itaque dolorem, at hic natus facilis, porro vel error libero iure reiciendis sint amet voluptas
                        illum.
                        Maiores, dolore maxime?</p>
                </div>
            </div>
            <div class="articleblog">
                <div>
                    <img src="./Images/concept-droit-echelles-justice-livre_218381-5063.jpg" alt="">
                </div>
                <div class="textblog">
                    <h4>Atualité du jour</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus molestias ad quae, quis autem
                        itaque dolorem, at hic natus facilis, porro vel error libero iure reiciendis sint amet voluptas
                        illum.
                        Maiores, dolore maxime?</p>
                </div>
            </div>
            <div class="articleblog">
                <div>
                    <img src="./Images/concept-droit-echelles-justice-livre_218381-5063.jpg" alt="">
                </div>
                <div class="textblog">
                    <h4>Atualité du jour</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus molestias ad quae, quis autem
                        itaque dolorem, at hic natus facilis, porro vel error libero iure reiciendis sint amet voluptas
                        illum.
                        Maiores, dolore maxime?</p>
                </div>
            </div>
            <div class="articleblog">
                <div>
                    <img src="./Images/concept-droit-echelles-justice-livre_218381-5063.jpg" alt="">
                </div>
                <div class="textblog">
                    <h4>Atualité du jour</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus molestias ad quae, quis autem
                        itaque dolorem, at hic natus facilis, porro vel error libero iure reiciendis sint amet voluptas
                        illum.
                        Maiores, dolore maxime?</p>
                </div>
            </div>
        </div>
    </section>
    <?php require_once './includes/footer.php' ?>
    <script>
        AOS.init();
    </script>
</body>

</html>