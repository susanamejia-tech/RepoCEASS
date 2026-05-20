<!--Descripción: Este archivo contiene el código HTML para la barra de navegación del sitio web de la organización sin fines de lucro. 
Incluye enlaces a las secciones principales del sitio: "¿Quiénes somos?", "¿Qué hacemos?", "¿Cómo puedes ayudar?" y "Contacto". Además, 
se incluye un logo que enlaza a la página de inicio.-->

<nav class="nav_global">

    <div class="nav_global_logo">
       <a href="Inicio.php"><img src="Multimedia/logo.png" alt="logo de la institución" width="100" height="110"></a>
    </div>

      <ul class="nav_global_links">
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

