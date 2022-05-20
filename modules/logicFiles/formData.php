<?php


$dbemail = 'julio@julio.com';
$dbpass = '123456';
$encPassword = password_hash($dbpass, PASSWORD_DEFAULT);

$email = $_POST['email'];
$password = $_POST['password'];

if($dbemail === $email && password_verify($password, $encPassword)){
    session_start();
    $_SESSION['email'] = $email;
    header("Location: ../private.php");
}else{
    header('Location: ../login.php?login-error');
}
