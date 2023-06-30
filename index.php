<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registrar Usuario</title>
    <script src="https://kit.fontawesome.com/02d0cd2df8.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
         <nav class="nav">
                <div><td><i class="fa-solid fa-calendar-days"></i>  TURNERO</td></div>
                <div><td><a href="index.html"><i class="fa-solid fa-circle-arrow-left"></i></a></td></div>
            </nav>
    </header>
   
    <div class="registro">
        <form method="post" id="formulario">
            <h1>REGISTRATE</h1>
            <p>Inicia tu registro</p>
            <?PHP
                include("registrar.php");
            ?>
            <div class="input-wrapper">
                <input type="text" name="name" placeholder="Nombre completo">
                <img class="input-icon" src="imagenes/person-solid.svg" alt="">
            </div>

            <div class="input-wrapper">
                <input type="email" name="email" placeholder="Email">
                <img class="input-icon" src="imagenes/envelope-solid.svg" alt="">
            </div>

            <div class="input-wrapper">
                <input type="text" name="direction" placeholder="Dirección">
                <img class="input-icon" src="imagenes/location-dot-solid.svg" alt="">
            </div>

            <div class="input-wrapper">
                <input type="tel" name="phone" placeholder="Número de telefono">
                <img class="input-icon" src="imagenes/phone-solid.svg" alt="">
            </div>

            <div class="input-wrapper">
                <input type="password" name="password" placeholder="Contraseña">
                <img class="input-icon" src="imagenes/lock-solid.svg" alt="">
            </div>
        
            <input class="btn" type="submit" name="registro" value="Enviar">
        
        </form>    
    </div>
    
    
</body>
</html>