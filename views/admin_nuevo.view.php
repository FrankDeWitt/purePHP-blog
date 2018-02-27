<?php require '../views/header.php'; ?>
<div class="container">
    <div class="row">
        <div class="container post">
            <div class=" article">
                <h2 class="titulo">Nuevo artículo</h2>
                <form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                    <input type="text" name="titulo" placeholder="Titulo del artículo">
                    <input type="text" name="extracto" placeholder="Extracto del artículo">
                    <textarea name="texto" placeholder="Texto del Artículo"></textarea>
                    <input type="file" name="thumb">
                    
                    <input type="submit" value="Crear Artículo">
                </form> 
            </div>
        </div>
    </div>
</div>
<?php require '../views/footer.php'; ?>
