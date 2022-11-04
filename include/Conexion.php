<?php
$Usuario = 'root';
$Clave = '';
$Servidor ='localhost';
$BaseDeDatos = 'pagina';
$Conexion = mysqli_connect($Servidor, $Usuario, $Clave);
$Db = mysqli_select_db($Conexion, $BaseDeDatos);
?>