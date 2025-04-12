<?php
$jsonFile = '../Portfolio/assets/navegacion.json';
$datos = json_decode(file_get_contents($jsonFile), true);
foreach ($datos as $dato) {
    ?>
    <header id="header-container">
        <div id="header-logo">
            <img src="<?= $dato['logo'] ?>" alt="Logo Fonseka" />
        </div>
        <button id="menu-toggle">&#9776;</button>
        <nav id="header-nav">
            <a href="./index.php"><?= $dato['about'] ?></a>
            <a href="./projects.php"><?= $dato['proyects'] ?></a>
            <a href="./contact.php"><?= $dato['contact'] ?></a>
        </nav>
    </header>
    <?php
}
?>