<?php
$jsonFile = '../Portfolio/assets/navegacion.json';
$datos = json_decode(file_get_contents($jsonFile), true);
$dato = $datos[0];
?>
<header id="header-container">
    <div id="header-logo">
        <img src="<?= $dato['logo'] ?>" alt="Logo Fonseka" />
    </div>
    <button id="menu-toggle" aria-label="Abrir menú de navegación">&#9776;</button>
    <nav id="header-nav">
        <a href="./index.php"><img src="assets/home.svg" alt="Botono Inicio"></a>
        <a href="./index.php"><?= $dato['about'] ?></a>
        <a href="./proyecto.php"><?= $dato['proyects'] ?></a>
        <a href="./contacto.php"><?= $dato['contact'] ?></a>
    </nav>
</header>
<?php
?>