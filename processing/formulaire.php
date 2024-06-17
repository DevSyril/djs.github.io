<?php
    require ('../config/database.php');

    $name = $_POST['name'];
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $quartier = $_POST['quartier'];
    $nature_affaire = $_POST['natureAffaire'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $description = $_POST['description'];

    if ($date != "" && $name != "") {
        $request = $myPDO->query("INSERT INTO rendez_vous(name, firstname, email, city, quartier, nature_affaire, date, time, description) VALUES (\"$name\", \"$firstname\", \"$email\", \"$city\", \"$quartier\", \"$nature_affaire\", \"$date\", \"$time\", \"$description\");") ;
        
        header('Location: attente.php?formulaire=success');
    }