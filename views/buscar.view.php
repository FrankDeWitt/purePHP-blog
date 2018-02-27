<?php require 'header.php'; ?>
    <div class="container">
        <div class="row">
            <h2 class="titulo"><?php echo $titulo; ?></h2>
                <?php foreach($resultados as $post): ?>
            <div class="container post">
                <div class="row article">
                    <h2 class="titulo"><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['titulo']; ?></a></h2>
                    <p class="fecha"><?php echo fecha($post['fecha']); ?></p>
                    <div class="thumb">
                        <a href="single.php?id=<?php echo $post['id']; ?>">
                            <img src="<?php echo RUTA; ?>/imagenes/<?php echo $post['thumb']; ?>">
                        </a>
                    </div>
                    <p class="extracto"><?php echo $post['extracto']; ?></p>
                    <a href="single.php?id=<?php echo $post['id']; ?>" class="continuar">Seguir leyendo</a>
                </div>
            </div>
                <?php endforeach; ?>
                <?php require 'paginacion.php'; ?>
        </div>
    </div>
<?php require 'footer.php'; ?>