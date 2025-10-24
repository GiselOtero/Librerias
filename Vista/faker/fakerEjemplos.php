<?php
include_once "../Estructura/header.php";


/* Ejemplo que proporciona la pagina de faker   */

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create(); /* Se crea una instancia del generador de Faker. */
// generate data by calling methods
$nombre = $faker->name();
// 'Vince Sporer'
$email = $faker->email();
// 'walter.sophia@hotmail.com'
$text =  $faker->text();
// 'Numquam ut mollitia at consequuntur inventore dolorem.'
?>

<div class="bg-light d-flex justify-content-center align-items-center vh-100">

    <?php

    // Generamos y mostramos datos falsos
    echo "<h1>Demostración de FakerPHP</h1>";
    echo "<ul>";
    echo "<li><strong>Nombre:</strong> " . $faker->name . "</li>";  /* Genera un nombre completo aleatorio (puede incluir nombre y apellido) */
    echo "<li><strong>Email:</strong> " . $faker->email . "</li>"; /*  Genera una dirección de correo electrónico */
    echo "<li><strong>Dirección:</strong> " . $faker->address . "</li>"; /* Devuelve una dirección postal aleatoria (calle, número, ciudad, etc.) */
    echo "<li><strong>Teléfono:</strong> " . $faker->phoneNumber . "</li>";  /* Crea un número de teléfono */
    echo "<li><strong>Teléfono :</strong> " .  '+54 9 299 ' . $faker->numerify('####-###') . "</li>";/* Genera un número personalizado con patrón numérico, útil para simular formatos específicos */
    echo "<li><strong>Empresa:</strong> " . $faker->company . "</li>"; /* Devuelve el nombre de una empresa ficticia. */
    echo "<li><strong>Texto aleatorio:</strong> " . $faker->text(100) . "</li>";  /* Genera un bloque de texto aleatorio de hasta 100 caracteres  */
    echo "<li><strong>Fecha de nacimiento:</strong> " . $faker->date('Y-m-d') . "</li>"; /* Crea una fecha aleatoria con el formato año-mes-día. */
    echo "<li><strong>Dominio:</strong> " . $faker->domainName . "</li>";  /* Devuelve un nombre de dominio ficticio (como ejemplo.com). */
    echo "<li><strong>IP:</strong> " . $faker->ipv4 . "</li>";
    echo "</ul>"; /* Genera una dirección IP aleatoria en formato IPv4. */
    ?>



</div>



<?php
include_once "../Estructura/footer.php";
?>