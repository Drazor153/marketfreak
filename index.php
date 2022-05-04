<!DOCTYPE html>
<html lang="es">
<head>
    <?php include("head.php")?>
    
    <title>MarketFreak</title>
</head>
<body>
    <header>

        <?php include("top.php")?>
        <?php include("nav1.php") ?>
    </header>
    <section>
        <?php
            if ($_POST) {
                $email = $_POST['email'];
                $password = $_POST['password'];

                echo "Tu correo es: ".$email;
                if (isset($_POST['admin'])) {
                    echo " y eres admin";
                }

                
            }
            echo $_SERVER['DOCUMENT_ROOT'];
        ?>
    </section>
</body>
</html>