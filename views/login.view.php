<?php require 'header.php'; ?>
<div class="container">
    <div class="row">
        <div class="container post">
            <div class="row">
                <h2 class="titulo">Iniciar sesión</h2>
                <form class="formulario" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                    <input type="text" name="usuario" placeholder="Usuario">
                    <input type="password" name="password" placeholder="Contraseña">
                    <input type="submit" value="Iniciar Sesión">
                </form>
            </div>
        </div>
    </div>
</div>
    
<?php require 'footer.php'; ?>