<?php
    $tituloPagina = "Investigación";
    include_once("../estructura/encabezado.php");
?>

<a class="mt-1 btn btn-lg btn-dark text-center text-white float-start" href="inicio.php"><i class="bi bi-arrow-90deg-left"></i></a>
<h1 class="mb-5 fw-bold">Investigación</h1>
<div class="accordion" id="investigacion">
    <div class="accordion-item bg-transparent border border-dark">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed text-white bg-dark bg-gradient" type="button" data-bs-toggle="collapse" data-bs-target="#pregunta2" aria-expanded="false" aria-controls="pregunta2">
                ¿Qué funcionalidades ofrece PHPMailer sobre mail()?
            </button>
        </h2>
        <div id="pregunta2" class="accordion-collapse collapse" data-bs-parent="#investigacion">
            <div class="accordion-body text-start">
                <p>Primeramente, <b>mail()</b> depende del subsistema de correo electrónico del servidor para funcionar, y por lo tanto, si se desea modificar alguna configuración o parámetros de autenticación del servidor, se debe hacer en todo el sistema.</p>
                <p>En cambio, con <b>PHPMailer</b> es posible utilizar diferentes configuraciones al mismo tiempo y cambiar entre ellas mediante programación. Haciendo así más fácil el cambio dinámico directamente desde PHP y haciendo el código mas portable entre distintos sistemas operativos independizándolo de la necesidad de un servidor de correo local para funcionar.</p>
                <p>Por otro lado, <b>mail()</b> solo nos permite enviar correos electrónicos de texto simple, pero no ofrece ninguna funcionalidad avanzada.</p>
                <p>Pero con <b>PHPMailer</b> es necesario una sola línea de código para agregar archivos adjuntos o enviar correos electrónicos HTML.</p>
            </div>
        </div>
    </div>
    <div class="accordion-item bg-transparent border border-dark">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed text-white bg-dark bg-gradient" type="button" data-bs-toggle="collapse" data-bs-target="#pregunta3" aria-expanded="false" aria-controls="pregunta3">
                ¿Cómo instalar PHPMailer?
            </button>
        </h2>
        <div id="pregunta3" class="accordion-collapse collapse" data-bs-parent="#investigacion">
            <div class="accordion-body text-start">
                <p>Para que la clase PHPMailer esté disponible en nuestro proyecto, tenemos dos opciones:</p>
                <ol>
                    <li>Usar <b>Composer</b> para descargar PHPMailer y crear automáticamente un archivo de carga automática. Esto es sumamente útil si se trabaja con varias librerías, ya que Composer se encarga de todos los pasos de descarga, actualización y verificación de dependencias.</li>
                    <li>Descargar manualmente el <b>código fuente de PHPMailer</b> e incluir los archivos necesarios en nuestro proyecto. Que puede ser empleado si no se desea instalar Composer por algún motivo en especial, como por ejemplo, al utilizar PHPMailer en un entorno de prueba</li>
                </ol>
                <div class="accordion" id="instalacion">
                    <div class="accordion-item bg-transparent border border-dark">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed text-white bg-dark bg-gradient" type="button" data-bs-toggle="collapse" data-bs-target="#instalacion1" aria-expanded="false" aria-controls="instalacion1">
                                1. Instalación usando Composer:
                            </button>
                        </h2>
                        <div id="instalacion1" class="accordion-collapse collapse" data-bs-parent="#instalacion">
                            <div class="accordion-body text-start">
                                <p>Composer es un administrador de dependencias para PHP que permite descargar, instalar y mantener actualizadas las extensiones y librerías de PHP.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bg-transparent border border-dark">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed text-white bg-dark bg-gradient" type="button" data-bs-toggle="collapse" data-bs-target="#instalacion2" aria-expanded="false" aria-controls="instalacion2">
                                2. Instalación usando código fuente:
                            </button>
                        </h2>
                        <div id="instalacion2" class="accordion-collapse collapse" data-bs-parent="#instalacion">
                            <div class="accordion-body text-start">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include_once("../estructura/pie.php");
?>