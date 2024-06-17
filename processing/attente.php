<?php
if (isset($_GET['message']) && $_GET['message'] == 'success') {
    header("Location: ../index.php?message=success");
    exit();
}

if (isset($_GET['formulaire']) && $_GET['formulaire'] == 'success') {
    header("Location: ../index.php?formulaire=success");
    exit();
}

