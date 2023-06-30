<?php
    include("conexion.php");

    if (isset($_POST['registro'])) {
        if (
            strlen($_POST['name'])>= 1 &&
            strlen($_POST['email'])>= 1 &&
            strlen($_POST['direction'])>= 1 &&
            strlen($_POST['phone'])>= 1 &&
            strlen($_POST['password'])>= 1 
        ) 
        {
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $direction = trim($_POST['direction']);
            $phone = trim($_POST['phone']);
            $password = trim($_POST['password']);
            $fecha = date ('d/m/y');
            $consulta = "INSERT INTO datos(nombre, email, direccion, telefono, contrasena, fecha)
                VALUES('$name', '$email', '$direction', '$phone', '$password', '$fecha')";
            $resultado = mysqli_query($conex, $consulta);
            
            if ($resultado) {
                ?>
                    <link rel="stylesheet" href="style.css">
                    <a class="pagini"href="iniciosesion.php"><b>INICIA SESIÓN</b></a>
                <?PHP
            }
            else {
                ?>
                    <h3 class="error">Ocurrió un error</h3>
                <?PHP
            }
            } else {
                ?>
                  <h3 class="error">Debés llenar todos los campos</h3>  
                <?PHP
            }
           
    }
?>