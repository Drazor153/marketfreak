<?php
session_start();
print_r($_SESSION);
?>
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
                
            }
        ?>
    </section>
</body>
</html>