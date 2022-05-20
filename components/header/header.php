<header class='header'>
<h1 class='header__h1'>Login System with PHP</h1>
<div>
<?php

// var_dump($_SESSION['email']);

if (!isset($_SESSION['email'])) {
    echo "<button class='header__button--login'><a href='../php-loginSystem/modules/login.php'>Login</a></button>";
} else {
    echo "<button class='header__button--logout'><a href='../index.php?close=1'>Log Out</a></button>";
}

?>
    
</div>
</header>
