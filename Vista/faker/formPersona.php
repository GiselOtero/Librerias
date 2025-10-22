<?php
include_once "../Estructura/header.php";

$datos = data_submitted();
$accion = "nuevo";


use Faker\Factory;



$faker = Factory::create('es_AR'); /* permite configurar el idioma para que los datos generados (como nombres, direcciones, textos, etc.) */
$dni = $faker->numerify('########');
$nombre = $faker->firstname();
$apellido = $faker->lastName();
$email = $faker->email();
$fechaNac = $faker->date('Y-m-d');
$telefono = '+54 9 299 ' . $faker->numerify('####-###');
$domicilio =  $faker->address();

?>
<div class="container mt-2">
    <div class="row justify-content-center">
        <div class="">

        </div>
        <div class="text-center display-4">
            Ingresar datos
        </div>
        <div class="col-md-6">

            <form action="accionPersona.php" method="post" id="formPersona" name="formPersona">

                <div class="mt-2">
                    <label class="form-label" for="Dni">Dni</label>
                    <input class="form-control" type="text" name="NroDni" id="NroDni" value="<?php echo $dni; ?>">
                    <div class="invalid-feedback" id="error-NroDni">

                    </div>
                </div>
                <div class="mt-2">
                    <label class="form-label" for="Apellido">Apellido</label>
                    <input class="form-control" type="text" name="Apellido" id="Apellido" value="<?php echo $apellido; ?>">

                    <div class="invalid-feedback" id="error-Apellido">

                    </div>

                </div>
                <div class="mt-2">
                    <label class="form-label" for="nombre">Nombre</label>
                    <input class="form-control" type="text" name="Nombre" id="Nombre" value="<?php echo $nombre; ?>">

                    <div class="invalid-feedback" id="error-Nombre">

                    </div>
                </div>
                <div class="mt-2">
                    <label class="form-label" for="fecha">Fecha Nacimiento</label>
                    <input class="form-control" type="date" name="fechaNac" id="fechaNac" value="<?php echo $fechaNac; ?>">

                    <div class="invalid-feedback" id="error-fechaNac">

                    </div>
                </div>
                <div class="mt-2">
                    <label class="form-label" for="Telefono">Telefono</label>
                    <input class="form-control" type="text" name="Telefono" id="Telefono" value="<?php echo $telefono; ?>">

                    <div class="invalid-feedback" id="error-Telefono">

                    </div>
                </div>
                <div class="mt-2">
                    <label class="form-label" for="Domicilio">Domicilio</label>
                    <input class="form-control" type="text" name="Domicilio" id="Domicilio" value="<?php echo $domicilio; ?>">

                    <div class="invalid-feedback" id="error-Domicilio">

                    </div>

                </div>
                <div>
                    <!-- Accion -->
                    <input type="hidden" name="accion" id="accion" value="<?php echo $accion; ?>">
                </div>


                <div class="mt-4">
                    <input class="btn btn-primary" type="submit" value="Enviar">
                    <input class="btn btn-danger" type="reset" value="Cancelar">
                    <a class="btn btn-secondary" type="btn" href="index.php">Menu</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include_once "../Estructura/footer.php";
?>