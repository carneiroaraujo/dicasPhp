<?php
require_once "entidades/Comentario.php";
$comentarios = Comentario::obterTodos();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>biblioteca</title>
</head>
<body>
    <h1>comentários</h1>
    <table>
        <thead>
            <tr>
                <th>texto</th>
                <th>ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($comentarios as $comentario): ?>
                <tr>
                    <th><?=$comentario["texto"]?></th>
                    <th><a href="logica/comentario/deletar.php?id=<?=$comentario['id']?>">deletar</a></th>
                </tr>
                
               
            <?php endforeach?>
        </tbody>
    </table>
    
</body>
</html>