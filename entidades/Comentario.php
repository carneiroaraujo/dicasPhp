<?php

require_once "Entidade.php";

class Comentario extends Entidade {
    static function obterTodos() {
        return self::$banco->query("select * from comentarios")->fetch_all(MYSQLI_ASSOC);
    }
    static function deletarPorId($id) {
        $statement = self::$banco->prepare("delete from comentarios where id = ?");
        $statement->bind_param("i", $id);
        return $statement->execute();
    }
    static function adicionar($texto) {
        $statement = self::$banco->prepare("insert into comentarios (texto) values (?)");
        $statement->bind_param("s", $texto);
        return $statement->execute();
    }
}

    
?>