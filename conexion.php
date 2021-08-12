<?php
  function retornarConexion() {
    $server = 'localhost';
    $usuario = 'root';
    $pass = '';
    $database = 'formusuario';

    $conexion = mysqli_connect($server, $usuario, $pass, $database) or die("Problemas en la conexión");
    mysqli_set_charset($conexion, 'utf-8');
    return $conexion;
  }
?>