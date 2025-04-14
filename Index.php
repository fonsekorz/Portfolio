<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/comunes.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/about-me.css">
    <link rel="stylesheet" href="css/projects.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="preload" as="image" href="assets/foto-perfil.webp">
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap"
        onload="this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap">
    </noscript>
    <meta name="description"
        content="Portfolio personal de Pablo Fonseca, técnico IT enfocado en desarrollo web, ciberseguridad y hacking ético. Conoce mis proyectos y tecnologías.">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Portfolio | Pablo Fonseca</title>
</head>

<body>
    <div class="wrapper">
        <?php include_once('./secciones/header.php'); ?>
        <?php include_once('./secciones/about-me.php'); ?>
        <?php include_once('./secciones/footer.php'); ?>
        <script src="./assets/menu.js" defer></script>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init();</script>

</body>

</html>