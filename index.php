<?php

require_once "entidades/Comentario.php";

print_r(Comentario::obterTodos()->fetch_assoc());
?>