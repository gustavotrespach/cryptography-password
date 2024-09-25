<?php

$hostname = "MySql";
$bancodedados = "senhas";
$usuario = "root";
$senha = "1q2w3e4r5t";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);

if ($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ")" . $mysqli->connect_errno;
}