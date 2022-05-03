<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles/lightstyle.css" id="css-theme">
    <!-- <link rel="stylesheet" href="header-style.css"> -->

    <script src="switchTheme.js"></script>
    <title>MarketFreak</title>
</head>
<body>
    <header>
        <div>
        <img src="logo.png" alt="logo" id="logo">
        <!-- SLIDER -->
        <label class="switch">
            <input type="checkbox" id="slider-theme" onclick="changeTheme()"/>
            <span class="slider round"></span>
        </label>
        
        <input type="text" class="search-bar" id="hsearch-bar">
    </div>
    <div>
        <input type="button" value="Inicio">
        <input type="button" value="Catálogo">
        <input type="button" value="Soporte">
        <input type="submit" value="Iniciar sesión">
        <input type="button" value="Registrarse">
    </div>
    </header>
    <section>
        <?php include("login.php")?>
    </section>
</body>
</html>