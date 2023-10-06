<?php
    $tituloPagina = "Implementación";
    include_once("../estructura/encabezado.php");
?>

<a class="mt-1 btn btn-lg btn-dark text-center text-white float-start" href="implementacion.php"><i class="bi bi-arrow-90deg-left"></i></a>
<div class="d-flex justify-content-center">
    <div class="w-50">
        <h1 class="mb-5 fw-bold">Envío de correo estándar</h1>
        <form action="../accion/accionImplementacionBasica.php" method="post" class="needs-validation p-5 border border-dark" novalidate>
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" required pattern="^[a-zA-Z][a-zA-Z\s]*$">
                <div class="valid-feedback">
                    Correcto.
                </div>
                <div class="invalid-feedback">
                    Ingrese su nombre.
                </div>
            </div>
            <div class="form-group">
                <label for="asunto">Asunto:</label>
                <input type="text" id="asunto" name="asunto" class="form-control" required pattern="^[a-zA-Z][\w\s]*$">
                <div class="valid-feedback">
                    Correcto.
                </div>
                <div class="invalid-feedback">
                    Ingrese el asunto del correo a enviar.
                </div>
            </div>
            <div class="form-group">
                <label for="cuerpo">Cuerpo del Mail:</label>
                <textarea class="form-control" id="cuerpo" name="cuerpo" required></textarea>
                <div class="valid-feedback">
                    Correcto.
                </div>
                <div class="invalid-feedback">
                    Ingrese el cuerpo del correo.
                </div>
            </div>
            <br>
            <input type="submit" class="btn btn-dark">
        </form>
        <script src="../js/function.js"></script>
    </div>
</div>

<?php
    include_once("../estructura/pie.php");
?>