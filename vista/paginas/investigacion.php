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
                <p>La función básica <b>mail()</b> depende del subsistema de correo electrónico del servidor para funcionar, y por lo tanto, si se desea modificar alguna configuración o parámetros de autenticación del servidor, se debe hacer en todo el sistema.</p>
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
                    <li>Usar <b>Composer</b> para descargar PHPMailer y crear automáticamente un archivo de carga automática. Esto es sumamente útil si se trabaja con varias librerías, ya que Composer se encarga de todos los pasos de descarga, actualización y verificación de dependencias.</li> <br>
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
                                <ol>
                                    <li>Nos aseguramos de tener un entorno de desarrollo web instalado (por ejemplo, <a href="https://www.apachefriends.org/es/index.html">XAMPP</a>), ya que Composer necesita un ejecutable PHP para funcionar.</li> <br>
                                    <li>Descargamos el archivo de instalación de <a href="https://getcomposer.org/">Composer</a> y procedemos a instalarlo. Con esto, ya podremos utilizar las herramientas de línea de comandos de Composer para instalar PHPMailer. </li> <br>
                                    <li>Abrimos una terminal y nos ubicamos en el directorio de nuestro proyecto o donde se desee instalar los paquetes de composer, incluyendo a PHPMailer.</li> <br>
                                    <li>Ejecutamos el comando:</li>
                                    <div class="d-flex justify-content-center">
                                        <code class="alert alert-dark p-2"><b>composer require phpmailer/phpmailer</b></code>
                                    </div>
                                    <li>Si los pasos fueron realizados correctamente, deberíamos tener en nuestro proyecto dos archivos nuevos llamados <b>"composer.json"</b> y <b>"composer.lock"</b> y también una carpeta llamada <b>"vendor"</b> donde se van a encontrar las librerias de Composer y PHPMailer; y donde también se van a poder exportar más librerias. Recibiendo una respuesta por consola como en la siguiente captura:</li> <br>
                                    <img src="../img/investigacion1.jpg" class="img-fluid rounded mx-auto d-block" alt="Respuesta de terminal"> <br> <br>
                                    <li>Dentro de la carpeta ventor, se generará un archivo <b>"autoload.php"</b> que se va a utilizar para incluir las bibliotecas instaladas. Y además, debido a que PHPmailer define sus clases bajo espacio de nombre especiales, es necesario el empleo de la directiva <b>"use"</b> al comienzo de los scripts donde las implementemos, creando un alias para las clases Exception, PHPMailer y SMTP, como se muestra a continuacion:</li> <br>
                                    <div class="d-flex justify-content-center">
                                        <pre class="alert alert-dark p-2"><code><b>&lt;?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require "C:\xampp\htdocs\nombreDelProyecto\vendor\autoload.php";</b></code></pre>
                                    </div>
                                </ol>
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
                                <ol>
                                    <li>Descargamos los archivos fuente de <a href="https://github.com/PHPMailer/PHPMailer">PHPMailer</a> haciendo clic en el botón <b>"code"</b> de color verde y seleccionado <b>"Download ZIP"</b>.</li> <br>
                                    <li>Descomprimimos el paquete con los archivos fuente y dentro de la carpeta src vamos a tener los archivos de las clases necesarios (PHPMailer, Exception y SMTP) que debemos incluir copiandolos dentro de nuestro proyecto.</li> <br>
                                    <li>Por último, también se debe configurar los alias del espacio de nombres al igual que en la instalación con Composer y como se muestra a continuación: </li> <br>
                                    <div class="d-flex justify-content-center">
                                        <pre class="alert alert-dark p-2"><code><b>&lt;?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require "C:\xampp\htdocs\nombreDelProyecto\util\class\PHPMailer.php";
    require "C:\xampp\htdocs\nombreDelProyecto\util\class\Exception.php";
    require "C:\xampp\htdocs\nombreDelProyecto\util\class\SMTP.php";</b></code></pre>
                                    </div>
                                </ol>
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