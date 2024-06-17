<?php
    require ('../config/database.php');

    $title = trim($_POST['title']);
    $subject = $_POST['subject'];
    $file_name = basename($_FILES["file"]["name"]);
    $description = $_POST['description'];
    $date = date("Y-m-d H:i:s");
    $user_id = $_COOKIE['username'];

    
    if (isset($title) && isset($description)) {
        move_uploaded_file($_FILES['file']['tmp_name'], "../assets/db/files/" . $file_name);
        $req = $myPDO->query("INSERT INTO article(title, subject, description, file_name, date, author) VALUES (\"$title\", \"$subject\", \"$description\", \"$file_name\", \"$date\", \"$user_id\");");
        $req->fetch();
        header("Location: ../admin/dashboard.php?article=success");
        exit();
    }
