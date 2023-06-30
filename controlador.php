<?php
    include("conexion.php");
    if (!empty($_POST["iniciar"])){
        if (empty ($_POST["nombre"])or empty ($_POST["pasword"])) {
            echo "Complete los campos";
        } else {
            $usuario=$_POST["nombre"];
            $password=$_POST["pasword"];
            $sql=$conex->query("select * from datos where nombre='$usuario' and contrasena='$password' ");
            if ($datos=$sql->fetch_object()) {
                header("location: indexusuario.html");
            } 
            else {
                echo "Nombre o contraseña incorrectos";

            }
            
        }
        
    }
?>