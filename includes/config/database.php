<?php
//Archivo de conexión a la base de datos
require 'config.php';

function conectarBD(): mysqli {
    //En caso de que no se cuente con el archivo config.php
    // y no se requiera contraseña para la base de datos
    //$db = mysqli_connect('localhost', 'root', '', 'bienesraices_crud');

    $db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if(!$db){
        echo "Error no se pudo conectar";
        exit;
    } 
    return $db;
}
?>