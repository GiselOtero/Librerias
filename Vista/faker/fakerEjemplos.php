<?php
include_once "../Estructura/header.php";


// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();
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
echo "<li><strong>Nombre:</strong> " . $faker->name . "</li>";
echo "<li><strong>Email:</strong> " . $faker->email . "</li>";
echo "<li><strong>Dirección:</strong> " . $faker->address . "</li>";
echo "<li><strong>Teléfono:</strong> " . $faker->phoneNumber . "</li>";
echo "<li><strong>Teléfono :</strong> " .  '+54 9 299 ' . $faker->numerify('####-###'). "</li>";/* genera números aleatorios siguiendo un patrón personalizado. Te explico cómo funciona paso a paso: */
echo "<li><strong>Empresa:</strong> " . $faker->company . "</li>";
echo "<li><strong>Texto aleatorio:</strong> " . $faker->text(100) . "</li>";
echo "<li><strong>Fecha de nacimiento:</strong> " . $faker->date('Y-m-d') . "</li>";
echo "<li><strong>Dominio:</strong> " . $faker->domainName . "</li>";
echo "<li><strong>IP:</strong> " . $faker->ipv4 . "</li>";
echo "</ul>";
?>



</div>



<?php
include_once "../Estructura/footer.php";
?>