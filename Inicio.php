<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/EstiloGeneral.css">
    <Link rel="stylesheet" href="CSS/EstiloInicio.css">
    <title>Inicio</title>

    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,600;1,400&family=Nunito:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <!--Header que contiene la información de presentación de la institución-->
    <header class="header">
        <!--Esta sección dentro del header incluye el nombre de la institución y una frase representativa-->
        <div class="header_section informacion">
            <article>
                <h2>Colegio de Especialidades Avanzadas en la Sexualidad y Salud A.C</h2>
                <h3>"24 años luchando por la familia de la niñez que vive maltrato extremo en Guadalajara, Jalisco, México."</h3> 
            </article> 
        </div>
        <!--Esta sección dentro del header incluye el logo de la institución-->
        <div class="header_section logo">
            <a href="Inicio.php"><img src="Multimedia/logo.png" alt="logo de la institución" width="170" height="170"></a>
        </div>
        <!--Esta sección dentro del header incluye la misión de la institución-->
        <div class="header_section informacion">
            <article>
                <h3>Nuestra misión:</h3>
                <h3>Modificar el sistema de vida, familia y entorno social de la niñez vulnerable de San Juan de Dios, Guadalajara.</h3> 
            </article>
        </div>
    </header>

    <!--Navegador que contiene los links hacia las partes más importantes del sitio web-->
    <nav class="nav_links">
            <ul>
                <li class="desplegable">
                    <a href="QuienesSomos.php">¿QUIÉNES SOMOS?</a>
                        <ul class="desplegable_menu">
                            <li><a href="#">Nuestra misión</a></li>
                            <li><a href="#">¿Cómo establecimos la forma de ayudar?</a></li>
                        </ul>
                </li>
                <li class="desplegable">
                    <a href="QueHacemos.php">¿QUÉ HACEMOS?</a>
                        <ul class="desplegable_menu">
                            <li><a href="QueHacemos.php#alimentacion">Alimentación</a></li>
                            <li><a href="QueHacemos.php#salud">Apoyo a la salud</a></li>
                            <li><a href="QueHacemos.php#identidad">Gestión de identidad legal</a></li>
                            <li><a href="QueHacemos.php#educacion">Educación integral</a></li>
                            <li><a href="QueHacemos.php#refugio">Refugio para mujeres y niños en situaciones vulnerables</a></li>
                            <li><a href="QueHacemos.php#empleo">Promoción del empleo</a></li>
                        </ul>
                </li>
                <li><a href="ComoPuedesAyudar.php">¿CÓMO PUEDES AYUDAR?</a></li>
                <li><a href="ServicioSocial.php">PRESTADORES DE SERVICIO SOCIAL</a></li>
                <li><a href="Contacto.php">CONTACTO</a></li>
            </ul>
    </nav>

    <main>

    <!--Video introductorio (presentación de la institución)-->
    <article>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/XYhizK_gi6o?si=w02bwm2R296ZMlkM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </article>

    <!--Contenido de la página de inicio, distribuido en tarjetas flip con links a páginas con más información-->
    <article class="contenido">
        <h2 class="subtitulo_apartado">¿CÓMO LOS AYUDAMOS?</h2>

        <div class="escena">

            <div class="tarjeta">
                <div class="tarjeta_interior">
                    <div class="cara_tarjeta cara_tarjeta_frontal">
                        <img src="Multimedia/alimentacion.jpg" alt="¿Quiénes somos?">
                        <div class="contenido_texto">
                            <h2>ALIMENTÁNDOLOS</h2>
                        </div>
                    </div>
                    <div class="cara_tarjeta cara_tarjeta_trasera">
                        <img src="Multimedia/fondo_tarjeta.jpeg" alt="Fondo">
                        <div class="contenido_texto">
                            <p>La alimentación tranforma. Empoderamos a mujeres de la comunidad para liderar la entrega de alimentos a quienes más lo necesitan.</p>
                            <p>Llevando platos gratuitos o accesibles a las calles y vecindades, no solo llenamos estómagos: salvamos familias y reconstruimos el tejido social desde la solidaridad.</p>
                            <a href="QueHacemos.php#alimentacion" class="boton_tarjeta" class="enlace_trasero">VER MÁS</a>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="tarjeta">
                <div class="tarjeta_interior">
                    <div class="cara_tarjeta cara_tarjeta_frontal">
                        <img src="Multimedia/salud.jpg" alt="¿Qué hacemos?">
                        <div class="contenido_texto">
                            <h2>ATENDIENDO SU SALUD</h2>
                        </div>
                    </div>
                    <div class="cara_tarjeta cara_tarjeta_trasera">
                        <img src="Multimedia/fondo_tarjeta.jpeg" alt="Fondo">
                        <div class="contenido_texto">
                            <p>En Guadalajara, una comunidad de 11,000 personas carece de acceso a servicios de salud oficiales por falta de identidad, o le temen debido al riesgo de separación familiar.</p>
                            <p>Brindando consultas básicas a domicilio, traslados a hospitales, y medicamentos, buscamos que la falta de un documento no sea una sentencia de muerte o desamparo.</p>
                            <a href="QueHacemos.php#salud" class="boton_tarjeta" class="enlace_trasero">VER MÁS</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tarjeta">
                <div class="tarjeta_interior">
                    <div class="cara_tarjeta cara_tarjeta_frontal">
                        <img src="Multimedia/identidad.png" alt="">
                        <div class="contenido_texto">
                            <h2>GESTIONANDO IDENTIDAD LEGAL</h2>
                        </div>
                    </div>
                    <div class="cara_tarjeta cara_tarjeta_trasera">
                        <img src="Multimedia/fondo_tarjeta.jpeg" alt="Fondo">
                        <div class="contenido_texto">
                            <p>En un sistema que utiliza el chantaje económico como obstáculo de registro, nosotros brindamos apoyo para que ningún niño o adulto viva en las sombras por falta de un documento que el Estado les ha vuelto inalcanzable.</p>
                            <a href="QueHacemos.php#identidad" class="boton_tarjeta" class="enlace_trasero">VER MÁS</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tarjeta">
                <div class="tarjeta_interior">
                    <div class="cara_tarjeta cara_tarjeta_frontal">
                        <img src="Multimedia/educacion.jpg" alt="¿Quiénes somos?">
                        <div class="contenido_texto">
                            <h2>EDUCÁNDOLOS</h2>
                        </div>
                    </div>
                    <div class="cara_tarjeta cara_tarjeta_trasera">
                        <img src="Multimedia/fondo_tarjeta.jpeg" alt="Fondo">
                        <div class="contenido_texto">
                            <p>Confinados en un gueto de invisibilidad, la comunidad de San Juan de Dios se desarrolla en un entorno sin escuela ni documentos, marcados por el aislamiento.</p>
                            <p>Rompemos estas fronteras mediante la educación cultural y el modelaje: un proceso de aprendizaje sin presiones donde el arte y el servicio transforman la apatía en alegría.</p>
                            <a href="QueHacemos.php#educacion" class="boton_tarjeta" class="enlace_trasero">VER MÁS</a>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="tarjeta">
                <div class="tarjeta_interior">
                    <div class="cara_tarjeta cara_tarjeta_frontal">
                        <img src="Multimedia/refugio.png" alt="¿Qué hacemos?">
                        <div class="contenido_texto">
                            <h2>REFUGIÁNDOLOS</h2>
                        </div>
                    </div>
                    <div class="cara_tarjeta cara_tarjeta_trasera">
                        <img src="Multimedia/fondo_tarjeta.jpeg" alt="Fondo">
                        <div class="contenido_texto">
                            <p>Miles de familias viven bajo la condena del 'pago diario': si no cubren su renta cada noche, pierden lo poco que tienen y son arrojadas a la violencia de la calle.</p>
                            <p>Nuestro refugio es su espacio de paz; un santuario protegido donde ni agresores ni autoridades pueden vulnerar la seguridad de las víctimas.</p>
                            <a href="QueHacemos.php#refugio" class="boton_tarjeta" class="enlace_trasero">VER MÁS</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tarjeta">
                <div class="tarjeta_interior">
                    <div class="cara_tarjeta cara_tarjeta_frontal">
                        <img src="Multimedia/empleo.png" alt="">
                        <div class="contenido_texto">
                            <h2>OPORTUNIDAD DE EMPLEOS</h2>
                        </div>
                    </div>
                    <div class="cara_tarjeta cara_tarjeta_trasera">
                        <img src="Multimedia/fondo_tarjeta.jpeg" alt="Fondo">
                        <div class="contenido_texto">
                            <p>Con el sistema de valores actual, madres e hijos nacen, crecen y mueren en un mundo sin derechos ni oportunidades. Desde hace 450 años, así sobreviven.</p>
                            <p>Buscamos guiar a las mujeres de la comunidad en el desarrollo de sus habilidades, brindándoles las herramientas necesarias para que logren obtener un empleo diferente que las dignificará.</p>
                            <a href="QueHacemos.php#empleo" class="boton_tarjeta" class="enlace_trasero">VER MÁS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
    </main>

    <?php include 'footer.php'; ?>

</body>
</html>