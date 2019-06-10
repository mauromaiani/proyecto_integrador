<?php
session_start();
require_once("helpers.php");
require_once("clases/Usuario.php");
require_once("clases/Validador.php");
require_once("clases/ArmarRegistro.php");
require_once("clases/BaseDatos.php");
require_once("clases/BaseJSON.php");
require_once("clases/Encriptar.php");
require_once("clases/Autenticador.php");
require_once("clases/BaseSQL.php");
require_once("clases/Query.php");

$host = "localhost";
$bd = "community01";
$usuario = "root";
$password = "root";
$puerto = "3306";
$charset = "utf8mb4";

$pdo = BaseSQL::conexion($host,$bd,$usuario,$password,$puerto,$charset);


$validar = new Validador();
$registro = new ArmarRegistro();
Autenticador::iniciarSession();
