<?php 
require_once "../../entidades/Comentario.php";

if (isset($_GET['texto'])) {
    $texto = $_GET['texto'];
    Comentario::adicionar($texto);

}

header("Location: /lista.php")
?>
