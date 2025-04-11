<?php
$jsonFile = '../Portfolio/assets/detalles.json';
$datos = json_decode(file_get_contents($jsonFile), true);

foreach ($datos as $dato) {
?>
    <main>
        <div id="main-container">
            <div id="explicacion">
                <p><?= $dato['descripcion'] ?></p>
                <img src="<?= $dato['foto'] ?>" alt="Foto">
            </div>
            <div id="trabajos">
                <p>Trabajos:</p>
                <ul>
                    <?php
                    foreach ($dato['trabajos'] as $clave => $trabajo) {
                        echo "<li>$trabajo</li>";
                    }
                    ?>
                </ul>
            </div>
            <div id="conocimientos">
                <p>Conocimientos:</p>
                <ul>
                    <?php
                    foreach ($dato['conocimientos'] as $conocimiento) {
                        echo "<li>" . $conocimiento['nombre'] . " : " . $conocimiento['nivel'] . "</li>";
                    }
                    ?>
                </ul>
            </div>
            <div id="estudios">
                <p>Estudios:</p>
                <ul>
                    <?php
                    foreach ($dato['estudios'] as $estudio) {
                        echo "<li>" . $estudio['nombre'] . " : " . $estudio['nivel'] . "</li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </main>
<?php
}
?>
