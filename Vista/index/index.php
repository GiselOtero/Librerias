<?php
include_once "../Estructura/header.php";
?>


<div class="text-center mb-4">
    <h1 class="display-4">Librerías PHP</h1>
    <p class="lead">Presentación del grupo</p>
</div>

<div class="card mb-4">
    <div class="card-header bg-primary text-white">Integrantes del grupo</div>
    <div class="card-body">
        <ul>
            <li>Sabrina Gaspart</li>
            <li>Ignacio Cire</li>
            <li>Juan Espinoza</li>
            <li>Gisel Otero</li>
        </ul>
    </div>
</div>

<div class="row mb-4">
    <div class="col-md-6">
        <div class="card h-100">
            <div class="card-header bg-success text-white">FakerPHP</div>
            <div class="card-body">
                <p><strong>¿Qué es?</strong> Una librería para generar datos falsos (nombres, direcciones, correos, etc.) útil para pruebas.</p>
                <pre><code>$faker = Faker\Factory::create();
echo $faker->name;</code></pre>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card h-100">
            <div class="card-header bg-warning text-dark">Google reCAPTCHA</div>
            <div class="card-body">
                <p><strong>¿Qué es?</strong> Un sistema de verificación para evitar bots en formularios.</p>
                <form action="procesar.php" method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                     <div class="g-recaptcha" data-sitekey="6LdwU_ArAAAAADil7cn9fZwTFWXAvnx0TZNhvAny"></div>
                    <button type="submit" class="btn btn-primary mt-3">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include_once "../Estructura/footer.php";
?>