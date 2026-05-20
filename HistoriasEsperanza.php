<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/EstiloGeneral.css">
    <title>Página en Construcción</title>

    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,600;1,400&family=Nunito:wght@400;700&display=swap" rel="stylesheet">

    <style>
        /* ==========================================================================
           ESTILOS Y ANIMACIONES PARA LA PÁGINA TEMPORAL
           ========================================================================== */
        
        .construccion-contenedor {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            /* Se asegura de que tome buen tamaño entre tu nav y tu footer */
            min-height: 70vh; 
            text-align: center;
            padding: 60px 24px;
            background-color: var(--color-bg);
            overflow: hidden;
        }

        /* 1. Animación del icono principal (Balanceo) */
        .icono-wrapper {
            position: relative;
            margin-bottom: 20px;
        }

        .icono-letrero {
            font-size: 5rem;
            display: inline-block;
            animation: balanceo 2.5s infinite ease-in-out;
            transform-origin: bottom center;
        }

        @keyframes balanceo {
            0%, 100% { transform: rotate(-10deg); }
            50% { transform: rotate(10deg); }
        }

        /* 2. Animación del engranaje (Rotación continua) */
        .icono-engranaje {
            font-size: 2.5rem;
            position: absolute;
            bottom: 0;
            right: -20px;
            animation: girar 4s linear infinite;
        }

        @keyframes girar {
            100% { transform: rotate(360deg); }
        }

        .titulo-construccion {
            color: var(--color-wine-dark);
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 16px;
            font-family: 'Lora', serif;
        }

        /* 3. Animación de la cinta de precaución usando tus colores institucionales */
        .cinta-precaucion {
            width: 100%;
            max-width: 600px;
            height: 16px;
            background: repeating-linear-gradient(
                45deg,
                var(--color-gold),
                var(--color-gold) 20px,
                var(--color-text-dark) 20px,
                var(--color-text-dark) 40px
            );
            border-radius: 8px;
            margin-bottom: 32px;
            box-shadow: var(--shadow-md);
            animation: moverCinta 20s linear infinite;
        }

        @keyframes moverCinta {
            0% { background-position: 0 0; }
            100% { background-position: 1000px 0; }
        }

        .texto-construccion {
            color: var(--color-text-muted);
            font-size: 1.15rem;
            max-width: 550px;
            line-height: 1.6;
            margin-bottom: 40px;
            font-family: 'Nunito', sans-serif;
        }

        .btn-regresar {
            background-color: var(--color-wine-light);
            color: #ffffff;
            padding: 14px 28px;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 700;
            font-size: 1rem;
            box-shadow: var(--shadow-md);
            transition: transform 0.2s ease, background-color 0.2s ease;
        }

        .btn-regresar:hover {
            background-color: var(--color-wine-dark);
            transform: translateY(-3px);
            box-shadow: var(--shadow-lg);
        }
    </style>
</head>

<body>

    <?php include 'nav.php'; ?>

    <main class="construccion-contenedor">
        
        <div class="icono-wrapper">
            <span class="icono-letrero">🚧</span>
            <span class="icono-engranaje">⚙️</span>
        </div>
        
        <h1 class="titulo-construccion">¡Parada en Pits!</h1>
        
        <div class="cinta-precaucion"></div>

        <p class="texto-construccion">
            Nuestros desarrolladores están haciendo una parada rápida en el taller. 
            Estamos martillando el código, ajustando tuercas y trabajando a velocidad de carrera 
            para que esta sección quede impecable. <br><br>
            <em>¡Vuelve muy pronto para descubrirla!</em>
        </p>

        <a href="index.php" class="btn-regresar">Volver al Inicio</a>

    </main>

    <?php include 'footer.php'; ?>

</body>
</html>