<?php

if(isset($_GET['close'])){

    session_start();

    unset($_SESSION);

    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - 42000,
            $params["path"],
            $params["domain"],
            $params["secure"],
            $params["httponly"]
        );
    }
    session_destroy();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./src/css/main.css" type="text/css" rel="stylesheet">
    <title>Login System PHP</title>
</head>

<body>
    <main class="main__container">
        <?php require './components/header/header.php'?>
        <?php require './components/mid-section/section.php'?>
        <?php require './components/footer/footer.php' ?>
    </main>
</body>

</html>