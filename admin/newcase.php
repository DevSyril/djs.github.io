<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admDashcss.css">
    <link rel="stylesheet" href="../css/admstyle.css">
    <link href="../assets/summernote/summernote-lite.min.css" rel="stylesheet">
    <title>Nouvel article</title>
</head>

<body>
    <?php
    require ('menu.php');
    ?>
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
        <section>
            <h3 class="baloo_title gap" style="margin: 15px">Remplissez le formulaire suivant pour créer une nouvelle étude de cas</h3>
        </section>
        <section>
            <form action="../processing/case.php" method="POST" enctype="multipart/form-data">
                <div class="article_edit">
                    <div class="label_input">
                        <label for="title">Entrez le titre de l'étude</label>
                        <input type="text" name="title" id="title" required>
                    </div>
                    <div class="label_input">
                        <label for="subject">Quel est le sujet de votre étude</label>
                        <input type="text" name="subject" id="subject">
                    </div>
                    <div class="label_input">
                        <label for="image">Choisissez un média illustratif pour votre étude</label>
                        <input type="file" name="file" id="image">
                    </div>
                    <div class="label_text">
                        <label for="description">Saisissez le texte de votre étude</label>
                        <textarea name="description" id="description"></textarea>
                    </div>
                    <button type="submit" class="">Publier</button>
                </div>
            </form>
        </section>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../assets/summernote/summernote-lite.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#description').summernote({
                height: 400,
            });
        });
    </script>
</body>

</html>