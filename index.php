<!DOCTYPE html>
<html lang="es">
<head>
    <?php include("head.php")?>
    
    <title>MarketFreak</title>
</head>
<body>
    <header>

        <?php include("top.php")?>
    
    <div>
        <input type="button" value="Catálogo">
        <input type="button" value="Soporte">
        <a href="login.php"><input type="button" value="Iniciar sesión"></a>
        <a href="register.php"><input type="button" value="Registrarse"></a>
    </div>
    </header>
    <section>
        <?php
            if ($_POST) {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $admin = $_POST['admin'];

                echo "Tu correo es: ".$email;
                if ($admin) {
                    echo "y eres admin";
                }
            }
            
        ?>
    </section>
</body>
</html>