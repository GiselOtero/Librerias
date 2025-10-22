<?php
include_once "../Estructura/header.php";


$datos = data_submitted();
$controlLogin = new LoginreCaptcha();
$respuesta = $controlLogin->salidaLogin($datos);

if($respuesta["exito"]){

      $mensaje = $respuesta["respuesta"];
     ?>
     <div class="bg-light d-flex justify-content-center align-items-center vh-100">
    <p class="display-4"><?php echo "". $mensaje; ?></p>
</div>
    <?php
    
}else{
   $mensaje = $respuesta["error"];
   header("Location: login.php?mensaje=".$mensaje);
   exit;
   
}


?>


    

<?php
include_once "../Estructura/footer.php";
?>