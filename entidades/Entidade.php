<?php 

require_once __DIR__ . "/../utilidades/banco.php";

class Entidade {
    public static $banco;
    static function atribuirBanco($banco) {
        self::$banco = $banco;
    }
}

Entidade::atribuirBanco($banco);
?>