<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="shortcut icon" href="./fotos/turno.png" />
    <link href="style.css" rel="stylesheet" > 
    <script src="https://kit.fontawesome.com/02d0cd2df8.js" crossorigin="anonymous"></script>
    <title>Inicio Sesión</title>
</head>

<body>
    <header>
        <nav class="nav">
            
            <div> <td><i class="fa-solid fa-calendar-days"></i>  TURNERO</td> </div>
            <div> <td><a href="index.html"><i class="fa-solid fa-circle-arrow-left"></i></a></td> </div>
            
        </nav>
    </header>
        
        <div  class="inicioses" id="formulario">
          <form method="POST" >
            <h1>INICIA SESIÓN</h1>
            <p>Ingresá a la pagina</p>

             <?PHP
             include("controlador.php");
             ?>

            <div class="input-inicio">
               <input type="text" name="nombre" id="nombre" placeholder="Nombre completo">
                <img class="input-icon" src="imagenes/person-solid.svg" alt="">
            </div>
    
            <div class="input-inicio">
               <input type="password" name="pasword" id="pasword" placeholder="Contraseña">
                <img class="input-icon" src="imagenes/lock-solid.svg" alt="">
            </div>
            
            <input class="btn" type="submit" name="iniciar" value="Enviar">
            
        </div>
        
       
</body>
</html>