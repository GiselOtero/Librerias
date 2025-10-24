<?php
include_once "../../configuracion.php";
include_once "../../vendor/autoload.php"; 
/* Esta línea incluye el archivo autoload generado por Composer.
 Composer es el gestor de dependencias de PHP, y este se encarga de cargar automáticamente todas las clases necesarias, incluyendo FakerPHP. 
 */

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Librerias</title>
  <link href="../Css/Bootstrap-5.3.8/bootstrap.min.css" rel="stylesheet">

  <!-- reCaptcha -->
   <script src="https://www.google.com/recaptcha/api.js" async defer></script>


</head>
<body>

  <!-- Header con menú -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="../index/index.php">Librerias</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="../reCaptcha/login.php"> Login reCaptacha</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../faker/fakerEjemplos.php"> Ejemplos Faker</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../faker/formPersona.php"> Nueva Persona Faker</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../formPersona/listadoPersonas.php">Listado de Personas</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Contenido  -->
  <div class="container mt-4">
    