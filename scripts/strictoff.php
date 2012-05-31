<?php

// STRICT_TRANS_TABLES off

echo 'funcionando';

$mysqli = new mysqli( $_SERVER["DB1_HOST"],  $_SERVER["DB1_USER"], $_SERVER["DB1_PASS"], $_SERVER["DB1_NAME"], $_SERVER["DB1_PORT"]);
if ($mysqli->connect_error) {
    die('Error de Conexión (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
echo 'Conectado  satisfactoriamente';

if ($mysqli->query("SET @@global.sql_mode= ''") === TRUE) {
    printf("Cambio de global.sql_mode ejecutado con exito\n");
}


if ($mysqli->query("SET NAMES utf8") === TRUE) {
    printf("Cambio de utf8 ejecutado con exito\n");
}

if ($mysqli->query("ALTER DATABASE " . $_SERVER["DB1_NAME"] . " charset=utf8;") === TRUE) {
    printf("Cambio de utf8 ejecutado con exito en base de datos\n");
}

$mysqli->close();
?>