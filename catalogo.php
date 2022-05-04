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
        $prod = ["NA001.jpg", "OP001.jpg", "ZD001.jpg"];
        $dir = "images/";
        for ($i=0; $i < count($prod); $i++) {   ?>
        <div>
            <img src=<?php echo $dir.$prod[$i];?> alt="">
            <h2>$35.000 CLP</h2><br>
            <a href="producto.php"><input type="button" value="Detalle"></a>
            <a href="carrito.php"><input type="button" value="+"></a>
        </div>

        <?php }; ?>
    </section>
</body>
</html>