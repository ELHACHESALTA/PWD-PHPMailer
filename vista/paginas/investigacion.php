<?php
    $tituloPagina = "Investigación";
    include_once("../estructura/encabezado.php");
?>

<a class="mt-1 btn btn-lg btn-dark text-center text-white float-start" href="inicio.php"><i class="bi bi-arrow-90deg-left"></i></a>
<h1 class="mb-5 fw-bold">Investigación</h1>
<div class="accordion" id="investigacion">
    <!-- Primera pregunta INICIO -->
    <div class="accordion-item bg-transparent border border-dark">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed text-white bg-dark bg-gradient" type="button" data-bs-toggle="collapse" data-bs-target="#pregunta1" aria-expanded="false" aria-controls="pregunta1">
                ¿Qué funcionalidades ofrece PHPMailer sobre mail()?
            </button>
        </h2>
        <div id="pregunta1" class="accordion-collapse collapse" data-bs-parent="#investigacion">
            <div class="accordion-body text-start">
                <p>La función básica <b>mail()</b> depende del subsistema de correo electrónico del servidor para funcionar, y por lo tanto, si se desea modificar alguna configuración o parámetros de autenticación del servidor, se debe hacer en todo el sistema.</p>
                <p>En cambio, con <b>PHPMailer</b> es posible utilizar diferentes configuraciones al mismo tiempo y cambiar entre ellas mediante programación. Haciendo así más fácil el cambio dinámico directamente desde PHP y haciendo el código mas portable entre distintos sistemas operativos independizándolo de la necesidad de un servidor de correo local para funcionar.</p>
                <p>Por otro lado, <b>mail()</b> solo permite enviar correos electrónicos de texto simple, pero no ofrece ninguna funcionalidad avanzada.</p>
                <p class="mb-0">Pero con <b>PHPMailer</b> es necesario una sola línea de código para agregar archivos adjuntos o enviar correos electrónicos HTML.</p>
            </div>
        </div>
    </div>
    <!-- Primera pregunta FIN -->
    <!-- Segunda pregunta INICIO -->
    <div class="accordion-item bg-transparent border border-dark">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed text-white bg-dark bg-gradient" type="button" data-bs-toggle="collapse" data-bs-target="#pregunta2" aria-expanded="false" aria-controls="pregunta2">
                ¿Cómo instalar PHPMailer?
            </button>
        </h2>
        <div id="pregunta2" class="accordion-collapse collapse" data-bs-parent="#investigacion">
            <div class="accordion-body text-start">
                <p>Para que la clase PHPMailer esté disponible en nuestro proyecto, existen dos opciones:</p>
                <ol>
                    <p><li>Usar <b>Composer</b> para descargar PHPMailer y crear automáticamente un archivo de carga automática. Esto es sumamente útil si se trabaja con varias librerías, ya que Composer se encarga de todos los pasos de descarga, actualización y verificación de dependencias.</li></p>
                    <li>Descargar manualmente el <b>código fuente de PHPMailer</b> e incluir los archivos necesarios en nuestro proyecto. Que puede ser empleado si no se desea instalar Composer por algún motivo en especial, como por ejemplo, al utilizar PHPMailer en un entorno de prueba</li>
                </ol>
                <div class="accordion" id="instalacion">
                    <!-- Primera subpregunta INICIO -->
                    <div class="accordion-item bg-transparent border border-dark">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed text-white bg-dark bg-gradient" type="button" data-bs-toggle="collapse" data-bs-target="#instalacion1" aria-expanded="false" aria-controls="instalacion1">
                                1. Instalación usando Composer:
                            </button>
                        </h2>
                        <div id="instalacion1" class="accordion-collapse collapse" data-bs-parent="#instalacion">
                            <div class="accordion-body text-start">
                                <p>Composer es un administrador de dependencias para PHP que permite descargar, instalar y mantener actualizadas las extensiones y librerías de PHP.</p>
                                <ol class="mb-0">
                                    <p><li>Hay con contar con un entorno de desarrollo web instalado (por ejemplo, <a href="https://www.apachefriends.org/es/index.html" target="_blank" class="link-danger">XAMPP</a>), ya que Composer necesita un ejecutable PHP para funcionar.</li></p>
                                    <p><li>Descargar el archivo de instalación de <a href="https://getcomposer.org/" target="_blank" class="link-danger">Composer</a> e instalarlo. Con esto, se podrá utilizar las herramientas de línea de comandos de Composer para instalar PHPMailer. </li></p>
                                    <p><li>Abrir una terminal y ubicarse en el directorio del proyecto donde se desee instalar los paquetes de composer, incluyendo a PHPMailer.</li></p>
                                    <p><li>Ejecutar el comando:</li></p>
                                    <div class="d-flex justify-content-center">
                                        <code class="alert alert-dark p-2"><b>composer require phpmailer/phpmailer</b></code>
                                    </div>
                                    <p><li>Si los pasos fueron realizados correctamente, se deberían haber creado en el proyecto dos archivos nuevos llamados <b>"composer.json"</b> y <b>"composer.lock"</b> y también una carpeta llamada <b>"vendor"</b> donde se van a encontrar las librerias de Composer y PHPMailer; y donde también se van a poder exportar más librerias. Recibiendo la siguiente respuesta por terminal:</li></p>
                                    <p><img src="../img/investigacion1.jpg" class="img-fluid rounded mx-auto d-block w-50" alt="Respuesta de terminal"></p>
                                    <p><li>Dentro de la carpeta ventor, se generará un archivo <b>"autoload.php"</b> que se va a utilizar para incluir las bibliotecas instaladas. Y además, debido a que PHPmailer define sus clases bajo espacio de nombre especiales, es necesario el empleo de la directiva <b>"use"</b> al comienzo de los scripts donde las implementemos, creando un alias para las clases Exception, PHPMailer y SMTP, como se muestra a continuacion:</li></p>
                                    <div class="d-flex justify-content-center">
                                        <pre class="alert alert-dark p-2 mb-0"><code><b>&lt;?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require "C:\xampp\htdocs\nombreDelProyecto\vendor\autoload.php";</b></code></pre>
                                    </div>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- Primera subpregunta FIN -->
                    <!-- Segunda subpregunta INICIO -->
                    <div class="accordion-item bg-transparent border border-dark">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed text-white bg-dark bg-gradient" type="button" data-bs-toggle="collapse" data-bs-target="#instalacion2" aria-expanded="false" aria-controls="instalacion2">
                                2. Instalación usando código fuente:
                            </button>
                        </h2>
                        <div id="instalacion2" class="accordion-collapse collapse" data-bs-parent="#instalacion">
                            <div class="accordion-body text-start">
                                <ol class="mb-0">
                                    <p><li>Descargar los archivos fuente de <a href="https://github.com/PHPMailer/PHPMailer" target="_blank" class="link-danger">PHPMailer</a> haciendo clic en el botón <b>"code"</b> de color verde y seleccionando <b>"Download ZIP"</b>.</li></p>
                                    <p><li>Descomprimir el paquete con los archivos fuente y dentro de la carpeta src se encontraran los archivos de las clases necesarios (PHPMailer, Exception y SMTP) que se deben incluir copiandolos dentro del proyecto donde se van a requerir.</li></p>
                                    <p><li>Por último, también se debe configurar los alias del espacio de nombres al igual que en la instalación con Composer, como se muestra a continuación: </li></p>
                                    <div class="d-flex justify-content-center">
                                        <pre class="alert alert-dark p-2 mb-0"><code><b>&lt;?php
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
                    <!-- Segunda subpregunta FIN -->
                </div>
            </div>
        </div>
    </div>
    <!-- Segunda pregunta FIN -->
    <!-- Tercera pregunta INICIO -->
    <div class="accordion-item bg-transparent border border-dark">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed text-white bg-dark bg-gradient" type="button" data-bs-toggle="collapse" data-bs-target="#pregunta3" aria-expanded="false" aria-controls="pregunta3">
                ¿Cómo enviar nuestro primer correo electrónico con PHPMailer?
            </button>
        </h2>
        <div id="pregunta3" class="accordion-collapse collapse" data-bs-parent="#investigacion">
            <div class="accordion-body text-start">
                <p>Para enviar un correo electrónico con PHPMailer se necesita crear un <b>objeto PHPMailer</b>, establecer algunos parámetros usando sus <b>métodos y atributos</b> y finalmente llamar al método <b>send()</b>.</p>
                <img src="../img/investigacion2.jpg" class="img-fluid rounded mx-auto d-block w-25" alt="Configuración básica de envío de correo">
            </div>
        </div>
    </div>
    <!-- Tercera pregunta FIN -->
    <!-- Cuarta pregunta INICIO -->
    <div class="accordion-item bg-transparent border border-dark">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed text-white bg-dark bg-gradient" type="button" data-bs-toggle="collapse" data-bs-target="#pregunta4" aria-expanded="false" aria-controls="pregunta4">
                ¿Cómo utilizar la clase PHPMailer?
            </button>
        </h2>
        <div id="pregunta4" class="accordion-collapse collapse" data-bs-parent="#investigacion">
            <div class="accordion-body text-start">
                <p>Una vez creado el objeto PHPMailer, se puede utilizar las <a href="http://phpmailer.github.io/PHPMailer/classes/PHPMailer-PHPMailer-PHPMailer.html" target="_blank" class="link-danger">extensas funcionalidades de la clase</a> para configurar todos los parámetros y atributos de correo electrónico que se necesite.</p>
                <p>Alguno de los métodos más utiles son los siguientes:</p>
                <ul class="mb-0">
                    <li><b>Dirección del remitente ("De:"):</b></li>
                    <p>Este método toma la dirección del remitente como primer parámetro, mientras que el segundo parámetro es opcional y establece el nombre del remitente tal como lo verá/n el/los destinatario/s.</p>
                    <div class="d-flex justify-content-center">
                        <code class="alert alert-dark p-2"><b>$mail -> setFrom("reclamoventas@gmail.com", "nombre");</b></code>
                    </div>
                    <li><b>Dirección de destinatario (“Para:”):</b></li>
                    <p>Al igual que con el remitente, el segundo parámetro es opcional y especifica el nombre del destinatario.</p>
                    <div class="d-flex justify-content-center">
                        <code class="alert alert-dark p-2"><b>$mail -> addAddress("reclamoventas@gmail.com");</b></code>
                    </div>
                    <li><b>Mensaje de correo electrónico HTML:</b></li>
                    <p>Establece el tipo de contenido del cuerpo del correo electrónico en HTML.</p>
                    <div class="d-flex justify-content-center">
                        <code class="alert alert-dark p-2"><b>$mail -> isHTML(true);</b></code>
                    </div>
                    <li><b>Codificación de contenido:</b></li>
                    <p>Establece un formato de codificación de carácteres que no permite tener compatibilidad con contenido en diferentes idiomas y/o usar carácteres especiales.</p>
                    <div class="d-flex justify-content-center">
                        <code class="alert alert-dark p-2"><b>$mail -> CharSet = "UTF-8";</b></code>
                    </div>
                    <p><li><b>Asunto del correo electrónico:</b></li></p>
                    <div class="d-flex justify-content-center">
                        <code class="alert alert-dark p-2"><b>$mail -> Subject = "asunto";</b></code>
                    </div>
                    <li><b>Cuerpo del correo electrónico:</b></li>
                    <p>El cuerpo del mensaje puede incluir texto sin formato y/o código HTML.</p>
                    <div class="d-flex justify-content-center">
                        <code class="alert alert-dark p-2"><b>$mail -> Body = "cuerpo";</b></code>
                    </div>
                    <li><b>Cuerpo del correo electrónico alternativo:</b></li>
                    <p>Incluye un cuerpo de texto plano alternativo para aquellos clientes de correo electrónico que no admiten HTML o que están configurados para no mostrar mensajes HTML.</p>
                    <div class="d-flex justify-content-center">
                        <code class="alert alert-dark p-2"><b>$mail -> AltBody = "cuerpo no HTML";</b></code>
                    </div>
                    <li><b>Agregar un archivo adjunto:</b></li>
                    <p>Esta función toma dos parámetros, el primero es la ruta del archivo y el segundo (opcional) es el nombre del archivo que verá el destinatario. Si no se establece, se utilizará el mismo nombre de archivo que el archivo local.</p>
                    <div class="d-flex justify-content-center">
                        <code class="alert alert-dark p-2"><b>$mail -> addAttachment("/rutaDelArchivo.mpr", "Nombre del archivo.mp3");</b></code>
                    </div>
                    <li><b>Establecer una dirección de respuesta diferente:</b></li>
                    <p>Se puede especificar a qué dirección responderá el destinatario cuando responda a su correo electrónico. La dirección predeterminada es la del remitente ("De:").</p>
                    <div class="d-flex justify-content-center">
                        <code class="alert alert-dark p-2"><b>$mail -> addReplyTo("nuevoCorreo@respuesta.com", "Nombre Correo Nuevo");</b></code>
                    </div>
                    <li><b>Agregar destinatarios CC y CCO:</b></li>
                    <p>Permite agregar nuevos destinatarios CC (copia carbón) y BCC (copia carbón oculta), con la diferencia que las direcciones CCO serán invisibles para otros destinatarios.</p>
                    <div class="d-flex justify-content-center">
                        <pre class="alert alert-dark p-2"><code><b>$mail -> addCC("correoCopia@destino.com", "Copia 1");
$mail -> addBCC("correoCopiaOculta@destino.com", "Copia 2");;</b></code></pre>
                    </div>
                    <p><li><b>Enviar el correo electrónico:</b></li></p>
                    <div class="d-flex justify-content-center">
                        <code class="alert alert-dark p-2 mb-0"><b>$mail -> send()</b></code>
                    </div>
                </ul>
            </div>
        </div>
    </div>
    <!-- Cuarta pregunta FIN -->
    <!-- Quinta pregunta INICIO -->
    <div class="accordion-item bg-transparent border border-dark">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed text-white bg-dark bg-gradient" type="button" data-bs-toggle="collapse" data-bs-target="#pregunta5" aria-expanded="false" aria-controls="pregunta5">
                ¿Cómo utilizar un servidor SMTP personalizado?
            </button>
        </h2>
        <div id="pregunta5" class="accordion-collapse collapse" data-bs-parent="#investigacion">
            <div class="accordion-body text-start">
                <p>PHPMailer permite configurar los parámetros de <b>conexión SMTP</b> directamente desde su script PHP, utilizando <b>protocolos de seguridad y autenticación</b> mediante los métodos y atributos de la clase.</p>
                <ul class="mb-0">
                <li><b>Salida de depuración detallada:</b></li>
                    <p>Habilita (2) o deshabilita (0) el modo de salida de depuración de la clase SMTP.</p>
                    <div class="d-flex justify-content-center">
                        <code class="alert alert-dark p-2"><b>$mail -> SMTPDebug = 0;</b></code>
                    </div>
                    <li><b>Configurar el envío usando SMTP:</b></li>
                    <p>Habilita el protocolo simple de transferencia de correos (SMTP). Que permite trabajar con sus propiedades de securidad y autenticación.</p>
                    <div class="d-flex justify-content-center">
                        <code class="alert alert-dark p-2"><b>$mail -> isSMTP();</b></code>
                    </div>
                    <p><li><b>Dirección del servidor SMTP:</b></li></p>
                    <div class="d-flex justify-content-center">
                        <code class="alert alert-dark p-2"><b>$mail -> Host = "smtp.gmail.com";</b></code>
                    </div>
                    <p><li><b>Habilitar la autenticación SMTP:</b></li></p>
                    <div class="d-flex justify-content-center">
                        <code class="alert alert-dark p-2"><b>$mail -> SMTPAuth = true;</b></code>
                    </div>
                    <p><li><b>Usuario de autenticación SMTP:</b></li></p>
                    <div class="d-flex justify-content-center">
                        <code class="alert alert-dark p-2"><b>$mail -> Username = "reclamoventas@gmail.com";</b></code>
                    </div>
                    <li><b>Contraseña de autenticación SMPT:</b></li>
                    <p>En el caso de Gmail, por cuestiones de seguridad se usa una <a data-bs-toggle="collapse" data-bs-target="#pregunta6" aria-expanded="false" aria-controls="pregunta6" class="link-danger">contraseña de aplicación</a> habilitada desde las configuraciones de la cuenta.</p>
                    <div class="d-flex justify-content-center">
                        <code class="alert alert-dark p-2"><b>$mail -> Password = "contraseña de aplicación";</b></code>
                    </div>
                    <li><b>Sistema de encriptación:</b></li>
                    <p>Permite configurar el sistema de encriptación entre <b>SSL</b> o <b>TSL</b>, que son dos protocolos o reclas de comunicación que permite a los sistemas informaticos comunicarse entre si en Internet de forma segura.</p>
                    <div class="d-flex justify-content-center">
                        <code class="alert alert-dark p-2"><b>$mail -> SMTPSecure = "ssl";</b></code>
                    </div>
                    <p><li><b>Puerto SMTP:</b></li></p>
                    <div class="d-flex justify-content-center">
                        <code class="alert alert-dark p-2 mb-0"><b>$mail -> Port = 465;</b></code>
                    </div>
                </ul>
            </div>
        </div>
    </div>
    <!-- Quinta pregunta FIN -->
    <!-- Sexta pregunta INICIO -->
    <div class="accordion-item bg-transparent border border-dark">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed text-white bg-dark bg-gradient" type="button" data-bs-toggle="collapse" data-bs-target="#pregunta6" aria-expanded="false" aria-controls="pregunta6">
                ¿Cómo utilizar PHPMailer con Google (Gmail) SMTP?
            </button>
        </h2>
        <div id="pregunta6" class="accordion-collapse collapse" data-bs-parent="#investigacion">
            <div class="accordion-body text-start">
                <p>El servidor SMTP de Google es <b>smtp.gmail.com</b>. Utiliza conexiones <b>cifradas con SSL</b> y funciona en el <b>puerto 587</b>.</p>
                <p>A su vez, el SMTP de Google requiere la autenticación con un nombre de usuario y contraseña antes de poder enviar el correo, y para esto es necesario tomar medidas adicionales para que funcione correctamente y sin dar errores:</p>
                <ol>
                    <p><li>Ir a las <a href="https://myaccount.google.com/" target="_blank" class="link-danger">configuraciones</a> de la cuenta de gmail.</li></p>
                    <p><li>En la pestaña de <b>Seguridad</b>, activar la <b>Verificación en dos pasos</b></li></p>
                    <p><img src="../img/investigacion3.jpg" class="img-fluid rounded mx-auto d-block w-50" alt="Verificación en dos pasos"></p>
                    <li>Una vez habilitada, ingresando a la opción de <b>Verificación en 2 pasos</b>, en la parte inferior de dicha página se debe crear una <b>"contraseña de aplicación"</b> que será usada para iniciar sesión con PHP.</li>
                    <p>Se debe elegir un nombre para la aplicación (por ejemplo, "PHPMailer") y presionar el botón "Crear".</p>
                    <p><img src="../img/investigacion4.jpg" class="img-fluid rounded mx-auto d-block w-50" alt="Contraseña de aplicación"></p>
                    <p><li>Después de seguir estos pasos, se obtendrá una cadena de 16 carácteres que serán los que utilizaremos en la variable <b>Password</b> copiandola sin espacios (están solo para facilitar la lectura):</li></p>
                    <p><div class="d-flex justify-content-center">
                        <code class="alert alert-dark p-2"><b>$mail -> Password = "abcdefghijkl";</b></code>
                    </div></p>
                    <p><b>¡IMPORTANTE!: Hay que asegurarse de copiar la contraseña de inmediato, ya que no se podrá recuperar más tarde. Si se pierde, se deberá crear una nueva contraseña de aplicación desde cero.</b></p>
                </ol>
            </div>
        </div>
    </div>
    <!-- Sexta pregunta FIN -->

</div>

<?php
    include_once("../estructura/pie.php");
?>