<!DOCTYPE html>
<html lang="es">
<head>
    <?php include("head.php")?>
    
    <title>Iniciar sesión</title>
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
    <div>
        <input type="button" value="Volver">
        <form action="" method="post">
            <h2>Registrarse</h2>
            <p>Nombres <input type="text" name="names"></p>
            <p>Apellidos <input type="text" name="lastname"></p>
            <p>Rut <input type="text" name="rut"></p>
            <p>Telefono <input type="text" name="cellphone"></p>
            <p>Direccion <input type="text" name="address"></p>
            <p>Correo <input type="text" name="email"></p>
            <p>Contraseña <input type="password" name="password"></p>
            <p>Confirmar contraseña <input type="password"></p>
            <input type="submit" value="Crear cuenta">
        </form>
        
    </div>
    </section>

</body>
</html>
