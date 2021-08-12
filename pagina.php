<?php
echo "<h1>Datos del formulario </h1>";

echo "<p>Su nombre:  $_POST[nombre]</p>";
echo "<p>Su apellido:  $_POST[apellido]</p>";
echo "<p>Su edad:  $_POST[edad]</p>";
echo "<p>Su hobbie:  $_POST[hobbie]</p>";
echo "<p>Su editor preferido:  $_POST[editor]</p>";
echo "<p>Su Sistema Operativo:  $_POST[sistoperativo]</p>";

echo "<br>";

echo "<a href='login.php'>Volver al Sistema</a>";
?>