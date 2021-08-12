<?php
  session_start();
  if(!isset($_SESSION['usuario']) && !isset($_SESSION['clave'])) {
    header('Location: noAcces.html');
    exit(0);
  }

  echo "<h1>Bienvenido al Sistema</h1>";

  echo "Los datos ingresados son: <br>";
  echo "Tu Usuario: " . $_SESSION['usuario'];
  echo "<br>";
  echo "Tu Clave: " . $_SESSION['clave'];

  echo "<br><br>";

  echo "<a href='formulario.html'>Ir al Formulario de Datos</a>";

  echo "<br><br>";

  echo "<a href='login.html'>Salir🚪</a>";
?>