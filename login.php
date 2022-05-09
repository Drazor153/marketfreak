<?php 
if (isset($_POST["email"])) {
    if ($_POST["email"] != "") {
        echo "<script> alert('Login presionado') </script>";
        header("Location: index.php");
        die();
    }
    
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <?php include("head.php")?>
    
    <title>Iniciar sesión</title>
</head>
<body>
    <header>

        <?php include("top.php")?>
        <?php include("nav1.php") ?>
    </header>
    <section>
        <div>
        <h2>Bienvenidos a MarketFreak</h2>
        <form action="login.php" method="post">
            Correo <input type="text" name="email"> <br>
            Contraseña <input type="password" name="password"> <br>
            <input type="checkbox" name="admin" > Administrador <br>
            <input type="submit" value="Iniciar sesión">

        </form>
        <p>Olvidaste tu contraseña? <a href="">Recuperar contraseña</a></p>
        
        <p>Eres nuevo?</p>
        <a href="register.php"><input type="button" value="Registrarse"></a>
        </div>
    </section>
</body>
</html>

