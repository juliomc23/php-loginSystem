<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../src/css/login.css" type="text/css" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <main class="main__container">
        <?php
        
        if(isset($_GET['login-error'])){
           echo "<form method='POST' action='../modules/logicFiles/formData.php' class='form__login'>
            <input class='formLogin__input' name='email' type='email' placeholder='Introduce your email'>
            <input class='formLogin__input' name='password' type='password' placeholder='Introduce your password'>
            <span>Error on login, try again</span>
            <div class='buttons__div'>
                <button class='formLogin__button' type='submit'>LOGIN</button>
                <button class='formLogin__button' type='button'><a href='../index.php'>CANCEL</a></button>
            </div>
            </form>";
        }else{
            echo "<form method='POST' action='../modules/logicFiles/formData.php' class='form__login'>
            <input class='formLogin__input' name='email' type='email' placeholder='Introduce your email'>
            <input class='formLogin__input' name='password' type='password' placeholder='Introduce your password'>
            <div class='buttons__div'>
                <button class='formLogin__button' type='submit'>LOGIN</button>
                <button class='formLogin__button' type='button'><a href='../index.php'>CANCEL</a></button>
            </div>
            </form>";
        }
        ?>
        
    </main>
</body>

</html>