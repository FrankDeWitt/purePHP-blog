<?php require '../views/header.php'; ?>
    <div class="container">
        <div class="row">
            <h2>Panel de control</h2>
            <a href="nuevo.php" class="btn">Nuevo Post</a>
            <a href="cerrar.php" class="btn">Cerrar sesión</a>
            <?php foreach($posts as $post): ?>
                <div class="container post">
                    <div class="row article">
                        <h2 class="titulo"><?php echo $post['titulo']; ?></h2>
                        <a href="editar.php?id=<?php echo $post['id']; ?>">Editar</a>
                        <a href="../single.php?id=<?php echo $post['id'];?>">Ver</a>
                        <a href="borrar.php?id=<?php echo $post['id']; ?>">Borrar</a>
                        <p class="fecha"><?php echo fecha($post['fecha']); ?></p>
                        <div class="thumb">
                            <a href="single.php?id=<?php echo $post['id']; ?>">
                                <img src="<?php echo RUTA; ?>/imagenes/<?php echo $post['thumb']; ?>">
                            </a>
                        </div>
                        <p class="extracto"><?php echo $post['extracto']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php require '../paginacion.php'; ?>
        </div>
    </div>
<?php require '../views/footer.php'; ?>