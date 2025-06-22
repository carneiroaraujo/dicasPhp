<?php
$banco = new mysqli("localhost", "root", "", "test");
if ($banco->connect_errno) {
    echo "falha na conexão com o banco";
    exit();
}


?>