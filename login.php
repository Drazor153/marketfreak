<<<<<<< HEAD
<?php 
if (isset($_POST["email"])) {
    if ($_POST["email"] != "") {
        echo "<script> alert('Login presionado') </script>";
        header("Location: index.php");
        die();
    }
    
=======
<?php
session_start();
if($_POST){
    if (($_POST["email"] == "ejemplo@gmail.com") && ($_POST["password"] == "12345")) {
        $_SESSION["usuario"] = "nombre_ejemplo";
        header("location:index.php");
    }
    else {
        echo "<script> alert('Correo y/o contraseña incorrectos'); </script>";
    }
>>>>>>> 6fb782f042200cfef40378726128e21c45706744
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
<<<<<<< HEAD
            Correo <input type="text" name="email"> <br>
            Contraseña <input type="password" name="password"> <br>
            <input type="checkbox" name="admin" > Administrador <br>
=======
            Correo: <input type="text" name="email"> 
            <br>
            Contraseña: <input type="password" name="password"> 
            <br>
            <input type="checkbox" name="admin" > Administrador 
            <br>
>>>>>>> 6fb782f042200cfef40378726128e21c45706744
            <input type="submit" value="Iniciar sesión">

        </form>
        <p>Olvidaste tu contraseña? <a href="">Recuperar contraseña</a></p>
        
        <p>Eres nuevo?</p>
        <a href="register.php"><input type="button" value="Registrarse"></a>
        </div>
    </section>
</body>
</html>

