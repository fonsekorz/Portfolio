<?php
$jsonFile = '../Portfolio/assets/detalles.json';
$datos = json_decode(file_get_contents($jsonFile), true);
foreach ($datos as $dato) {
    ?>
    <main>
        <div id="main-container">
            <div id="explicacion">
                <div id="exp-texto">
                    <h1>Sobre mí</h1>
                    <p><?= $dato['descripcion'] ?></p>
                </div>
                <div id="exp-imagen">
                    <img src="<?= $dato['foto'] ?>" alt="Foto">
                </div>
            </div>
            <div id="tecnologias">
                <div id="tecnologias-titulo">
                    <h1>Tecnologías</h1>
                </div>
                <div class="grid-tecnologias">
                    <?php foreach ($dato['tecnologias'] as $tecnologia): ?>
                        <div class="tecnologia">
                            <img src="<?= $tecnologia['logo'] ?>" alt="<?= $tecnologia['nombre'] ?>">
                            <h2><?= $tecnologia['nombre'] ?></h2>
                            <p class="nivel <?= strtolower($tecnologia['nivel']) ?>">
                                <?= $tecnologia['nivel'] ?>
                            </p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </main>
    <?php
}
?>