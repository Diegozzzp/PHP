<?php
    session_start();
    if($_POST)
    {
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];
    }
    if(!isset($_SESSION['email']) || !isset($_SESSION['password'])) {
        header('location:login.php');   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Biemvenido al home</h1>
    <p>tu email es <?php echo $_SESSION['email']; ?></p>
    <p>tu Contraseña es  <?php echo $_SESSION['password']; ?></p>
    <a href="cerrar-sesion.php">Logout</a>

</body>
</html>