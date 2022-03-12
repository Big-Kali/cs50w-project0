<?php
  $host ="localhost";
  $user="root";
  $password = "";
  $database ="brandon";

$enlace = mysqli_connect($host, $user, $password, $database);

if(!$enlace){
  echo"error en la conexion con el servidor";
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      type="text/css"
      href="./css/style.css"
      media="screen"
    />
    <link
    
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <title>Login</title>
  </head>
  <body>
    <div class="nav">
      <h2 class="login">Login</h2>
      <form  method="POST" action="inicio.html" class="nav-in">
        <p class="icons">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-2 w-2"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76"
            />
          </svg>
        </p>
        

        <br />
        <input type="text"  name="Nombres"   placeholder="Nombres" />

        <input type="text"  name="Apellidos"  placeholder="Apellidos" />

        <input type="email"   name="Email"  placeholder="Email" />
        <br />
        <input id="enviar"
          class="btn btn-primary "
          
          type="submit"
          placeholder="Submit"
          value="submit"
        />
      </form>
    </div>
  </body>
</html>

<?php

  if(isset($_POST['submit'])){
    $nombre = $_POST["Nombres"];
    $correo = $_POST["Apellidos"];
    $email = $_POST["Email"];

    $insertarDatos = "INSERT INTO brandon  VALUES('$nombre', '$correo', '$email')";

    $Insertar = mysqli_query($enlace, $insertarDatos);
    if(!$Insertar){
      echo "Error  en la linea  de sql";
    }

  }


?>
