Descripción del proyecto:
Realizamos está página web con la finalidad de facilitar y agilizar el pedido de turnos, para que el emprendedor o empresario no deba estar anotando en hoja y papel o contestando Miles de mensajes por día. 

Tenemos en mente nuevas actualizaciones del turnero, ya que no llegamos a terminarlo con el tiempo, algunas de ellas son: 
ENVIO DE MAIL: cada vez que se registre un nuevo turno, se le enviará un mail informando al emprendedor/secretario. 
CONEXION CALENDARIO: conectar el calendario del turnero con el calendario de Google de quién realice en trabajo para mejor organización. 
SEÑA: al sacar un turno se pedirá una seña al usuario, para denotar que el turno no es falso y así no hacerle gastar tiempo a quien trabaje.

¿Qué hay en este repositorio?
Este repositorio tiene 3 carpetas:
-Imagenes: contiene las imagenes usas en el proyecto
-Calendario: Aquí estan los archivos que ayudan al funcionamiento de el calendario de la página.
-Y los archivos que ayudan al funcionamiento del frontend y backend están sueltos los cuales son:
  -indexusuario.html
  -index.html
  -conexion.php
  -controlador.php
  -iniciosesion.php
  -mysql.txt
  -paginainicio.js
  -registrar.php
  -script.php
  -script.js
  -sesion.php
  -style.css
  usuario.js

Pasos a seguir para instalar y dejar funcionando el proyecto.
Para esto, el cliente dara detalles de como modificar la pagina con el diseño que el quiera, luego se subiran los cambios al servidor (de una pagina nueva) y este ya podra recibir turnos y administrarlos.

Pasos para poder hacer uso de la aplicacion
Los usuario tendran que entrar a la página y primero que nada abrir sesion o crease una cuenta. Luego, con la sesion ya abierta, se mostrara una descripción de que hace la empresa a la cual se le quiere pedir un turno. Tambien se pondran ejemplos de a cuales empresas se les dios este servicio anteriormente para brindar confianza al usuario. El usuario se debe dirigir al apartado "sacar turno" donde se abrira un calendario para poder seleccionar fecha y hora. Y si ya quiere ver sus turnos solo debe dirigirse al apartado mis turnos.

Guia de instalacion de programas:
Xampp:
Utilizamos xampp para crear la base de datos, desde cualquier navegador web hay que acceder a la suguiente pagina https://www.apachefriends.org/es/index.html
Una vez dentro debemos instalar la version compatible con nuestro sistema operativo. Ya instalado el Archivo deberemos buscarlo en nuestra carpeta de Descargas o en la carpeta
elegida. El programa Xampp, al iniciar su instalador, te advierte que evites instalarlo en el directorio de
instalación de Windows. Xampp te dará la bienvenida al instalador. Al clickear en "next" el instalador preguntará que componentes de Xampp deseas instalar. Elegiremos la ruta donde instalar Xampp. Al presionar "next" comenzará la descarga e instalación del programa, que solo tardará unos minutos.

Visual Studio code:
Primero debemos entrar a la página oficial: https://code.visualstudio.com
Una vez en la pagina debemos instalarlo en la version compatible con nuestro sistema
operativo. Luego de instalarlo debemos buscar el instalador en Descargas o en la carpeta elegida.
Entramos en el instalador y aceptamos los acuerdos. Elegimos el directorio que prefiramos. Clickeamos en "instalar" despues de elegir las tareas adicionales que estan.

Dia:
Para instalarlo deberemos entrar al siguiente enlace:
https://sourceforge.net/projects/dia-installer/files/dia-win32-installer/0.97.2/dia-setup-0.97.2-2-un
signed.exe/download
Y este se instalará automaticamente.
Deberemos encontrar el setup en descargas y clickearlo.
Nos pedirá que seleccionemos el Lenguaje del programa
Después nos dará la bienvenida al instalador y le daremos todo en siguiente.
Una vez aquí elegiremos el directorio que querramos y le daremos a instalar.

Iniciar los servidores de Apache y MySQL:
Luego de haber instalado la aplicación Xampp, la iniciamos y presionamos "Start" en las filas de
Apache y Mysql.
En nuestro navegador, ingresamos a: http://localhost/phpmyadmin/index.php
Clckeamos en la sección "nueva", creamos una base de datos con el nombre de "turnero" y
presionamos "Crear"
Nos dirigimos a Importar y seleccionamos el archivo "archivo.sql", que se encuentra en el
repositorio de github. Luego, oprimimos el botón "importar" al final de la página.
Descargamos el repositorio de github desde la sección "code" y una vez descargado,
descomprimimos el archivo.
Ingresamos a la ubicación del archivo del programa de Xampp. Nos dirigimos a la carpeta
llamada "htdocs" y pegamos el archivo descomprimido.
Ingresamos al buscador y pegamos el siguiente enlace para ingresar a la página: (ENLACE)


