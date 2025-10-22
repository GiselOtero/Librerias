<?php
include_once "../Estructura/header.php";


$datos = data_submitted();

?>
<?php
  if (isset($datos["mensaje"])) {
  ?>
    <div class="my-2 alert alert-info" id="mensaje-alert"> <?php echo $datos["mensaje"] ?></div>

  <?php


  }
  ?>
<div class="bg-light d-flex justify-content-center align-items-center vh-100">
  
  <div class="card p-4 shadow-sm" style="width: 100%; max-width: 360px;">
    <h4 class="text-center mb-4">Iniciar sesión</h4>
    <form id="loginForm" method="post" action="accionLogin.php" id="login"  >
      <div class="mb-3">
        <label for="usuario" class="form-label">Usuario </label>
        <input type="text" class="form-control" id="usuario" name="usuario" required>
        <div class="invalid-feedback">
          Ingresa un correo válido.
        </div>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="password" required minlength="6">
        <div class="invalid-feedback">
          Mínimo 6 caracteres.
        </div>

      </div>
      <div class="mb-3">
        <!-- reCaptacha clave cliente -->
        <div class="g-recaptcha" data-sitekey="6LdwU_ArAAAAADil7cn9fZwTFWXAvnx0TZNhvAny"></div>

      </div>
      <!-- <button type="submit" ></button> -->
      <input type="submit" class="btn btn-primary w-100" value="Ingresar">
    </form>
  </div>
</div>


<?php
include_once "../Estructura/footer.php"
?>