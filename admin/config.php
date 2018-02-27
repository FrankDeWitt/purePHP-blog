<?php
//CASA
define('RUTA', 'http://localhost/curso_php/Curso%20Git%20Folder/Curso%20Udemy/blog');
//CURRO
//define('RUTA', 'http://localhost/Carpeta%20de%20aprendizaje/Repor%20Curso%20Udemy/Curso%20Udemy/blog');
header('Content-Type: text/html; charset=utf-8');

$bd_config = array(
    'basedatos' => 'blog_viajes',
    'usuario' => 'root',
    'pass' => ''
);
$blog_config = array(
    'post_por_pagina' => '3',
    'carpeta_imagenes' => 'imagenes/'
);
$blog_admin = array(
    'usuario' => 'admin',
    'pass' => 'admin'
);

?>

