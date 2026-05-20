# Sitio Web Institucional - CEASS (Colegio de Especialidades Avanzadas en la Sexualidad y Salud A.C.)

## Descripción general de la aplicación
Este proyecto consiste en el desarrollo del sitio web que será optado de manera oficial para el **Colegio de Especialidades Avanzadas en la Sexualidad y Salud A.C.**, una organización sin fines de lucro en la que estoy desempeñando mi servicio social. La plataforma digital está diseñada para dar visibilidad a la labor social de la institución, presentar sus ejes de acción, facilitar el contacto con donadores e invitar a estudiantes universitarios a realizar su servicio social apoyando a un movimiento en general.

## Problema o necesidad que resuelve
La institución necesitaba una plataforma centralizada y profesional que les permitiera:
1. Difundir su misión y sus 6 ejes de acción de manera general.
2. Atraer financiamiento y apoyo en especie mediante llamados a la acción.
3. Reclutar talento universitario para el servicio social a través de un sistema organizado por perfiles profesionales y centros universitarios.
4. Generar confianza y credibilidad mediante un diseño moderno y accesible.

## Integrantes del equipo y rol de cada uno
* **Susana Rubí Manzo Mejía (susanamejia-tech)** - Creadora del sitio y gestión del repositorio.

## Tecnologías utilizadas
* **Frontend:** HTML5 y CSS3.
* **Tipografía:** Integración de Google Fonts (Lora y Nunito).
* **JavaScript (Vanilla):** Interactividad del lado del cliente (acordeones dinámicos, scroll suave, ventanas modales).
* **Backend y Arquitectura:** Arquitectura de directorio plano (flat directory structure) utilizando PHP de manera modular para *templating* e inclusión de componentes globales (`nav.php` y `footer.php`).

## Herramienta o herramientas de IA utilizadas
Gemini de Google

## Prompts principales utilizados o resumen de cómo se usó la IA
El uso de la IA en el desarrollo del sistema web que estoy realizando ha sido de manera muy puntual, ya que este sitio lo estoy desarrollando por mi cuenta, a diferencia de la Práctica 9 por ejemplo, donde toda la aplicación móvil se realizo con prompts, aquí solamente hago uso de la IA en momentos donde necesito corregir algún error o realizar una función que esté más allá de mis conocimientos.

## Funcionalidades principales
* **Arquitectura Modular:** Uso de PHP para mantener un `header` y `footer` consistentes en todas las páginas.
* **Tarjetas Interactivas (Flip Cards):** Presentación de los ejes de acción en la página de inicio que revelan más información al interactuar.
* **Acordeón de Servicio Social:** Una sección dinámica y clasificada por áreas de estudio y carreras, que permite a los estudiantes encontrar actividades acordes a su perfil sin saturar la pantalla de texto.
* **Formulario Modal Integrado:** Un sistema de contacto rápido (conectado vía Formspree) para la captación de voluntarios y prestadores de servicio social.
* **Páginas Temporales:** Vistas amigables de "Página en Construcción" con animaciones CSS para secciones aún en desarrollo.

## Estructura del proyecto
```text
RepoCEASS/
│
├── CSS/
│   ├── EstiloGeneral.css        # Variables globales, nav y footer
│   ├── EstiloInicio.css         # Estilos específicos para Inicio.php
│   ├── EstiloQueHacemos.css     # Estilos para QueHacemos.php
│   └── EstiloServicioSocial.css # Estilos para ServicioSocial.php
│
├── Multimedia/                  # Recursos gráficos
│   ├── logo.png, logo.jpg
│   ├── alimentacion.jpg, salud.jpg, educacion.jpg, empleo.jpg
│   ├── refugio.png, identidad.png, ServicioSocial.png
│   ├── fondo_tarjeta.jpeg, fondoheader.jpg
│   └── administracion.ico, agricultura.ico, arte.ico, certificado.ico, conocimiento.ico, salud.ico, social.ico, tecnologia.ico
│
├── nav.php                      # Componente de navegación global
├── footer.php                   # Componente de pie de página global
├── Inicio.php                   # Landing page principal
├── QueHacemos.php               # Detalle de ejes de acción
├── ServicioSocial.php           # Portal para universitarios
├── ComoPuedesAyudar.php         # Página en construcción
├── Contacto.php                 # Página en construcción
├── QuienesSomos.php             # Página en construcción
├── HistoriasEsperanza.php       # Página en construcción
└── README.md                    # Documentación del proyecto
```

## Instrucciones para instalar y ejecutar
1. **Requisitos previos:** Asegúrate de tener instalado un servidor local que soporte PHP.
2. **Clonar el repositorio:** Descarga los archivos a través de `git clone https://github.com/susanamejia-tech/RepoCEASS.git`
3. **Ubicación de archivos:** Mueve la carpeta completa del proyecto a tu directorio de servidor local (ej. `htdocs` si usas XAMPP).
4. **Ejecutar el servidor:** Inicia tu servidor web local (por ejemplo, Apache).
5. **Visualizar el sitio:** Abre tu navegador web de preferencia y navega hacia la ruta correspondiente de la página `Inicio.php` (`http://localhost/RepoCEASS/Inicio.php`).

## Capturas de pantalla o enlaces a evidencias
* **Repositorio Oficial:** [susanamejia-tech/RepoCEASS](https://github.com/susanamejia-tech/RepoCEASS)

## README generado por Deepwiki
* **Enlace:** https://deepwiki.com/susanamejia-tech/RepoCEASS
