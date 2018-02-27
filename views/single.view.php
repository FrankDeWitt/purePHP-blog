<?php require 'header.php'; ?>
<div class="container">
    <div class="row">
        <div class="container post">
            <div class="row article">
                <h2 class="titulo"><?php echo $post['titulo']; ?></h2>
                <p class="fecha"><?php echo fecha($post['fecha']); ?></p>
                <div class="thumb">
                    <img src="<?php echo RUTA; ?>/imagenes/<?php echo $post['thumb']; ?>">
                </div>
                <p class="extracto"><?php echo nl2br($post['texto']); ?> </p>
            </div>
        </div>
    </div>
</div>
<?php require 'footer.php'; ?>
