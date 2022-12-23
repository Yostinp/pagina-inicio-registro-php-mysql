<?php
$server = 'localhost';
$usuario = 'root';
$password = '';
$bd = 'bd-floreria';

$conexion = new mysqli($server,$usuario,$password,$bd);
$conexion->set_charset("utf8");
if(!$conexion){
    ?>
    <h4>error de conexion..</h4>
    <?php
}



?>