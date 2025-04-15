<?php
$jsonFile = '../Portfolio/assets/projects.json';
$proyectos = json_decode(file_get_contents($jsonFile), true);
?>
<main>
    <div id="fondo-proyectos">
        <div id="proyectos-titulo">
            <div data-aos="zoom-in">
                <h1>Proyectos</h1>
            </div>
        </div>
        <div class="grid-proyectos">
            <?php foreach ($proyectos as $proyecto): ?>
                <div class="proyecto">
                    <img class="imagen-proyecto" src="<?php echo $proyecto['imagen']; ?>"
                        alt="<?php echo $proyecto['nombre']; ?>">
                    <h2><?php echo $proyecto['nombre']; ?></h2>
                    <p><?php echo $proyecto['descripcion']; ?></p>
                    <div id="botones">
                        <div class="botones">
                            <?php foreach ($proyecto['botones'] as $boton): ?>
                                <a class="boton" href="<?php echo $boton['url']; ?>" target="_blank">
                                    <img src="<?php echo $boton['icono']; ?>" alt="<?php echo $boton['boton']; ?> icon">
                                    <?php echo $boton['boton']; ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>