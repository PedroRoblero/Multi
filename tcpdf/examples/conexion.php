<?php
	$usuario="root";
	$clave="";
	$db_nombre="tarjeta";
	$host="localhost";

    $conn = new PDO("mysql:host=$host;dbname=$db_nombre", $usuario, $clave);
 ?>	