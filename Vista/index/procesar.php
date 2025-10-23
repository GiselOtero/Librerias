<?php
include_once "../Estructura/header.php";


$datos = data_submitted();
$controlEjemplo= new ejemploIndex();
$respuesta = $controlEjemplo->mensaje($datos);

$mensaje = $respuesta["mensaje"];
if($respuesta["exito"]){

   header("Location: index.php?estado=1&mensaje=".$mensaje);
   exit;
   
}else{
    header("Location: index.php?estado=0&mensaje=".$mensaje);
   exit;
}


?>


    

<?php
include_once "../Estructura/footer.php";
?>