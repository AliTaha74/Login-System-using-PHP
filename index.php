<?php
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>My Page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <div class="nav">
    <form action="loginphp.php" method="post">
    <input type="text" name="email"placeholder="E-mail">
    <input type="password" name="pwd"placeholder="Password">
    <button type="submit" action="">Login</button>
    </form>
    <form action="register.php">
    <button type="submit">Register</button>
    </form>
    </div>
    </body>
</html>
