<?php
    require ('../config/database.php');

    $name = $_POST['name'];
    $firstname = $_POST['firstname'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (isset($message) && $message!= "") {
        $req = $myPDO->query("INSERT INTO messages(author_name, author_firstname, phone_number, email, message) VALUES (\"$name\", \"$firstname\", \"$phone_number\", \"$email\", \"$message\");");
        header('Location: attente.php?message=success');
        exit();
    }