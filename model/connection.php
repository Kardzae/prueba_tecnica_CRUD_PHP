<?php
// variable para conexión a la Base de Datos
$connection = new mysqli("localhost", "root", "", "crud_test");

// validation para conexión a la Base de Datos!
if(!$connection){
    die("Failed to connect");
}
?>