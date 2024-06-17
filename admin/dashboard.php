<?php
require ('menu.php');
?>
<?php
if (isset($_GET['article']) && $_GET['article'] == 'success') {
    echo "<script> alert(\"Vous venez de publier un nouvel article\"); </script>";
}
if (isset($_GET['case']) && $_GET['case'] == 'success') {
    echo "<script> alert(\"Vous venez de publier une nouvelle étude de cas\"); </script>";
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admDashcss.css">
    <link rel="stylesheet" href="../css/admstyle.css">
    <title>Tableau de bord administrateur DJS</title>
</head>

<body>
    <main>
        <section>
            <div class="head_items flex gap">
                <a href="events.php"><img src="../icônes/icons8-add-50.png" alt="" class="icons"></a>
                <div class="user flex flex_center gap">
                    <img src="../icônes/people_personal_account_profile_identity_avatar_user_icon_219338.png" alt=""
                        class="icons" style="border-radius: 30px; border: 1px solid #CC0F39;">
                    <h4 class="quicksand_text">
                        <?= $_COOKIE['username'] ?>
                    </h4>
                </div>
            </div>
        </section>
        <section class="dash_card_zone flex flex_center gap">
            <a href="">
                <div class="dash_card">
                    <img src="../icônes/icons8-event-accepted-64.png" alt="" class="dash_icons">
                    <h4>Mes Rendez-vous</h4>
                </div>
            </a>
            <a href="">
                <div class="dash_card">
                    <img src="../icônes/icons8-messages-50.png" alt="" class="dash_icons">
                    <h4>Mes Messages</h4>
                </div>
            </a>
            <a href="">
                <div class="dash_card">
                    <img src="../icônes/icons8-blog-80.png" alt="" class="dash_icons">
                    <h4>Mes Articles</h4>
                </div>
            </a>
            <a href="">
                <div class="dash_card">
                    <img src="../icônes/icons8-view-64.png" alt="" class="dash_icons">
                    <h4>Etude de cas</h4>
                </div>
            </a>
        </section>
        <section class="list_zone">
            <table width="100%">
                <td class="baloo_title">
                    Tous mes articles
                </td>
                <td class="button_td">
                    <a href="" class="ajout">Créer</a>
                </td>
            </table>
            <div class="list_container">
                <div class="article">
                    <div class="article_img"></div>
                    <h4 class="quicksand_text">Titre de l'article</h4>
                    <h5>Paru le </h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci magni perspiciatis ea dolorem
                        accusamus consequuntur quod sint iste molestiae assumenda porro laborum eaque, saepe incidunt
                        repellat fugit debitis vitae voluptate.<br /><br />
                        <a href="">Voir plus</a>
                    </p>
                    <a href="" class="ajout flex flex_center" width="60px">Supprimer</a>
                </div>
            </div>
        </section>
        <section class="list_zone">
            <table width="100%">
                <td class="baloo_title">
                    Toutes les études de cas
                </td>
                <td class="button_td">
                    <a href="" class="ajout">Créer</a>
                </td>
            </table>
            <div class="list_container">
                <div class="article">
                    <div class="article_img"></div>
                    <h4 class="quicksand_text">Titre de l'étude</h4>
                    <h5>Paru le </h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci magni perspiciatis ea dolorem
                        accusamus consequuntur quod sint iste molestiae assumenda porro laborum eaque, saepe incidunt
                        repellat fugit debitis vitae voluptate.<br /><br />
                        <a href="">Voir plus</a>
                    </p>
                    <a href="" class="ajout flex flex_center" width="60px">Supprimer</a>
                </div>
            </div>
        </section>
        <section class="list_zone">
            <table width="100%">
                <td class="baloo_title">
                    Mes messages
                </td>
                <td class="button_td">
                    <a href="" class="ajout">Voir tout</a>
                </td>
            </table>
            <div class="list_container">
                <div class="article">
                    <h4 class="quicksand_text">Sujet</h4>
                    <h5>Nom de l'Auteur </h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci magni perspiciatis ea dolorem
                        accusamus consequuntur quod sint iste molestiae assumenda porro laborum eaque, saepe incidunt
                        repellat fugit debitis vitae voluptate.<br /><br />
                        <a href="">Voir plus</a>
                    </p>
                    <a href="" class="ajout flex flex_center" width="60px">Supprimer</a>
                </div>
            </div>
        </section>
        <section class="list_zone">
            <table width="100%">
                <td class="baloo_title">
                    Demandes de rendez-vous
                </td>
                <td class="button_td">
                    <a href="" class="ajout">Voir tout</a>
                </td>
            </table>
            <div class="list_container">
                <div class="article">
                    <h4 class="quicksand_text">Sujet</h4>
                    <h4>Nom de l'Auteur </h4>
                    <h5>Date</h5>
                    <h5>Heure</h5>
                    <a href="" class="ajout flex flex_center" width="60px">Supprimer</a>
                </div>
            </div>
        </section>
    </main>
</body>

</html>