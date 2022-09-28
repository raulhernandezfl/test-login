<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <?php
        require 'partials/header.php'
    ?>

    <h1>Login</h1>
    <span>or <a href="registrarse.php">Registrarse</a> </span>

    <form action="login.php">
        <input type="text" name="email" placeholder="Ingresa tu correo electrónico">
        <input type="password" name="password" placeholder="Ingresa tu contraseña">
        <input type="submit" value="Send">
    </form>
</body>
</html>