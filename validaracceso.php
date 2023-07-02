<?php

$cuenta = $_GET['cuenta'];
$rol = $_GET['rol'];

if($rol == "Docente"){
    include('Docente.php');
}else if($rol == "Evaluador"){
    include('Evaluador.php');
}else{
    include('Administrador.php');
}

?>