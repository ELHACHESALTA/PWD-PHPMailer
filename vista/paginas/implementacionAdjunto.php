<?php
    $tituloPagina = "Implementación";
    include_once("../estructura/encabezado.php");
?>

<h1>Envío con archivo adjunto</h1>
<div>
    <form action="../accion/accionImplementacionAdjunto.php" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
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
            <input type="text" id="cuerpo" name="cuerpo" class="form-control" required pattern="^[a-zA-Z][a-zA-Z0-9\s]*$">
            <div class="valid-feedback">
                Correcto.
            </div>
            <div class="invalid-feedback">
                Ingrese el cuerpo del correo.
            </div>
        </div>
        <div class="form-group">
            <label for="archivoAdjunto">Archivo A Enviar:</label>
            <input type="file" id="archivoAdjunto" name="archivoAdjunto" class="form-control" required>
            <div class="valid-feedback">
                Correcto.
            </div>
            <div class="invalid-feedback">
                Adjunte algún archivo.
            </div>
        </div>
        <br>
        <input type="submit" class="btn btn-dark">
    </form>
    <script src="../js/function.js"></script>
</div>
<?php
    include_once("../estructura/pie.php");
?>