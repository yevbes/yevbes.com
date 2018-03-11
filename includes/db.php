<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 28/11/2017
 * Time: 23:16
 */

require "config.php";
$host = $config['database_config']['host'];
$dbname = $config['database_config']['database_name'];
$user = $config['database_config']['user'];
$pass = $config['database_config']['pass'];

$mysqli = mysqli_connect($config['database_config']['host'],
    $config['database_config']['user'], $config['database_config']['pass'],
    $config['database_config']['database_name']);

if (!$mysqli) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

session_start();