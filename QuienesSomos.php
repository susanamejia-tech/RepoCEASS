<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/EstiloGeneral.css">
    <title>Página en Construcción</title>

    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,600;1,400&family=Nunito:wght@400;700&display=swap" rel="stylesheet">

    <style>
        /* ESTILOS Y ANIMACIONES PARA LA PÁGINA TEMPORAL */
        
        .construccion-contenedor {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 70vh; 
            text-align: center;
            padding: 60px 24px;
            overflow: hidden;
        }

        /* Animación del icono principal */
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

        /* Animación del engranaje (Rotación continua) */
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
            color: var(--color-wine-dark, #140911);
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 16px;
            font-family: 'Lora', serif;
        }

        /* CINTA DE PRECAUCIÓN */
        .cinta-precaucion {
            width: 100%;
            max-width: 600px;
            height: 15px;
            background: repeating-linear-gradient(
                -45deg, 
                var(--color-gold, #ffcc00) 0px,
                var(--color-gold, #ffcc00) 20px,
                var(--color-text-dark, #1a1a1a) 20px,
                var(--color-text-dark, #1a1a1a) 40px
            );
            background-size: 56px 56px;
            border-radius: 8px;
            margin-bottom: 32px;
            box-shadow: var(--shadow-md, 0 4px 6px rgba(0,0,0,0.1));
            animation: moverCinta 2s linear infinite; 
        }

        @keyframes moverCinta {
            from { background-position: 0 0; }
            to { background-position: 56px 0; } /* Debe coincidir con el tamaño del background-size */
        }

        .texto-construccion {
            color: var(--color-text-muted, #1a1818);
            font-size: 1.15rem;
            max-width: 650px;
            line-height: 1.6;
            margin-bottom: 40px;
            font-family: 'Nunito', sans-serif;
        }

        .btn-regresar {
            background-color: #77241b;
            color: #ffffff;
            padding: 14px 28px;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 700;
            font-size: 1rem;
            box-shadow: var(--shadow-md, 0 4px 6px rgba(0,0,0,0.1));
            display: inline-block; /* Asegura que el padding y transform funcionen correctamente */
            transition: transform 0.2s ease, background-color 0.2s ease, box-shadow 0.2s ease;
        }

        .btn-regresar:hover {
            background-color: #c5583d;
            transform: translateY(-3px);
            box-shadow: var(--shadow-lg, 0 10px 15px rgba(0,0,0,0.15));
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
            Estamos martillando el código, ajustando tuercas y trabajando a velocidad de carrera para que esta sección quede impecable. 
            <br><br>
            <em>¡Vuelve muy pronto para descubrirla!</em>
        </p>

        <a href="index.php" class="btn-regresar">Volver al Inicio</a>

    </main>

    <?php include 'footer.php'; ?>

</body>
</html>