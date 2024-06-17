<?php
require ('../config/database.php');

$username = $_POST['username'];
$password = $_POST['password'];

$req = $myPDO->query("SELECT * FROM admin WHERE username = '$username' AND password = '$password';");
$result = $req->fetch();

if (isset($result) && $result) {
    setcookie('username', $username, time()+3600000, '/');
    setcookie('id', $result['id'], time()+3600000, '/');
    header('Location: ../admin/dashboard.php');
}else {
    header('Location: ../admin/login.php?page=connexion&user=unknown');
}
