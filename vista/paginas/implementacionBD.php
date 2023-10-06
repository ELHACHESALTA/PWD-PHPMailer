<?php
    $tituloPagina = "Implementación";
    include_once("../estructura/encabezado.php");
?>

<a class="mt-1 btn btn-lg btn-dark text-center text-white float-start" href="implementacion.php"><i class="bi bi-arrow-90deg-left"></i></a>
<div class="d-flex justify-content-center">
    <div class="w-50">
        <h1 class="mb-5 fw-bold">Envío con base de datos</h1>
        <form action="../accion/accionImplementacionBD.php" method="post" class="needs-validation p-5 border border-dark" novalidate>
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
            <br>
            <h4>Tipo de Reclamo:</h4>
            <div class="form-check">
                <label class="form-check-label" for="tipoReclamoVentas">Ventas</label>
                <input class="form-check-input" type="radio" name="tipoReclamo" id="tipoReclamoVentas" value="ventas" required>
            </div>
            <div class="form-check">
                <label class="form-check-label" for="tipoReclamoTecnico">Técnico</label>
                <input class="form-check-input" type="radio" name="tipoReclamo" id="tipoReclamoTecnico" value="tecnico" required>
            </div>
            <br>
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
            <div class="form-group">
                <label for="correo">Correo de contacto:</label>
                <input type="email" id="correo" name="correo" class="form-control" required>
                <div class="valid-feedback">
                    Correcto.
                </div>
                <div class="invalid-feedback">
                    Ingrese un correo electrónico.
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