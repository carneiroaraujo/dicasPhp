<?php 
require_once "../../entidades/Comentario.php";

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    Comentario::deletarPorId($id);
}

header("Location: /lista.php")
?>
