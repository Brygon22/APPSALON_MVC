<?php

$db = mysqli_connect('mysql-barberia.alwaysdata.net', 'barberia', 'bo3xley76849532', 'barberia_mvc');

$db->set_charset("utf8");

if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}
