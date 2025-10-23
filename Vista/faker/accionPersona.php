<?php
include_once "../Estructura/header.php";

$datos = data_submitted();
//print_r($datos);
$controlPersona = new ABMPersona();
$accion = $controlPersona->abmAccion($datos);
$respuesta = "";

if($accion){
    $respuesta= "La accion  se realizo correctamente";
}else{
    $respuesta= "La accion  no se realizo correctamente";

} 

header("Location: ../formPersona/listadoPersonas.php?mensaje=".$respuesta);
    exit;




include_once "../Estructura/footer.php";
?>

