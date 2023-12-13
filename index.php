<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Italika - Programación Web</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffcc00; /* Amarillo brillante */
            color: #333;
        }

        header {
            background-color: #ff6600; /* Naranja brillante */
            color: white;
            text-align: center;
            padding: 1em;
        }

        nav {
            background-color: #33ccff; /* Azul claro */
            color: white;
            padding: 1em;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }

        section {
            padding: 1em;
            margin: 1em;
            background-color: #ffcc00; /* Amarillo brillante */
            border-radius: 5px;
        }

        footer {
            background-color: #ff6600; /* Naranja brillante */
            color: white;
            text-align: center;
            padding: 1em;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <header>
        <h1>Programación Web</h1>
    </header>

    <nav>
        <a href="#">Inicio</a>
        <a href="#">Modelos</a>
        <a href="#">Servicios</a>
        <a href="#">Contacto</a>
    </nav>

    <section>
        <h2 style="color: #ff6600;">Italika</h2> <!-- Naranja brillante para el título de la sección -->
        <p>Italika es una empresa mexicana dedicada a la fabricación y venta de motocicletas. Fundada en el año 2003, se ha convertido en una de las marcas líderes en el mercado de motocicletas en México. Ofrece una amplia gama de modelos, desde motonetas hasta motocicletas de mayor cilindrada.</p>
        <p>Con presencia en todo el país, Italika se ha destacado por su compromiso con la calidad y la innovación en el diseño de sus motocicletas, brindando opciones accesibles para diferentes segmentos de usuarios.</p>
    </section>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Luis Javier Arizmendi</p>
    </footer>

</body>
</html>
