<!DOCTYPE html>
<html lang = "es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Roboto|Slabo+27px" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo RUTA; ?>/css/bootstrap.min.css" rel="stylesheet" >
        <link href="<?php echo RUTA; ?>/css/style.css" rel="stylesheet" >
        <script type="text/javascript" src="<?php echo RUTA; ?>/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="<?php echo RUTA; ?>/js/bootstrap.min.js"></script>
        <title>Blog</title>
    </head>
    <body> 
        <header>
            <nav class="navbar navbar-inverse">
                <div class="container">
                    <div class="navbar-header col-md-2">
                        <a class="navbar-brand" href="<?php echo RUTA; ?>">
                            <!--<img alt="Brand" src="...">-->
                            Mi primer blog
                        </a>
                    </div>
                    <form class="navbar-form navbar-right" name="busqueda" action="<?php echo RUTA; ?>/buscar.php" method="get">
                        <div class="form-group">
                            <input type="text" class="form-control" name="busqueda" placeholder="Buscar">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </nav>
        </header>
        <div class="sticky-content">