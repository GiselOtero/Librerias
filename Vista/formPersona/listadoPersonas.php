<?php
include_once "../Estructura/header.php";


$datos = data_submitted();
$obj = new ABMPersona();
$listaPersonas = $obj->buscar(null);
if (isset($datos["NroDni"])) {
    $listaPersonas = $obj->buscar($datos);
}


if (isset($datos["mensaje"])) {
?>
    <div class="my-2" id="mensaje-alert"> <?php echo $datos["mensaje"] ?></div>

<?php


}


if (count($listaPersonas) > 0) {
?>
    <div class="d-flex justify-content-center">
        <div class="table-responsive " style="max-width: 90%;">
            <table class="table  table-hover " >
                <thead>
                    <tr class="table-light">
                        <th scope="col">Nro Dni</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Fecha Nac</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Domicilio</th>
                       
    
                    </tr>
                </thead>
    
                <tbody>
    
    
                    <?php
                    foreach ($listaPersonas as $unaPersona) {
                        echo "<tr>";
                        echo "<td>" . $unaPersona->getNroDni() . "</td>";
                        echo "<td>" . $unaPersona->getApellido() . "</td>";
                        echo "<td>" . $unaPersona->getNombre() . "</td>";
                        echo "<td>" . $unaPersona->getFechaNac() . "</td>";
                        echo "<td>" . $unaPersona->getTelefono() . "</td>";
                        echo "<td>" . $unaPersona->getDomicilio() . "</td>";
                    ?>
    
                        
                        </tr>
                    <?php
    
                        /*  echo "</tr>"; */
                    } //fin foreach
                } else { ?>
    
                    <div class="card border-danger mb-3" style="max-width: 18rem;">
                        <!-- <div class="card-header"></div> -->
                        <div class="card-body text-danger">
                            <h5 class="card-title">No hay datos ALmacenados</h5>
                            <!--  <p class="card-text"></p> -->
                        </div>
                    </div>
    
                <?php
                }
                ?>
    
                </tbody>
    
            </table>
    
        </div>

        
    </div>
    <div class="my-4">
        <a class="btn btn-primary" type="btn" href="../faker/formPersona.php">Agregar</a>
    </div>



    <script>
        // Espera 4 segundos y luego oculta el mensaje
        setTimeout(function() {
            var alerta = document.getElementById('mensaje-alert');
            if (alerta) {
                alerta.style.display = 'none';
            }
        }, 10000); // 4000 milisegundos = 4 segundos
    </script>
<?php
    include_once "../Estructura/footer.php";
?>