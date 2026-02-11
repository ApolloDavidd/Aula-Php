<?php
// O que não fazer!!
// $logado = true;
// echo "<div>";
// if ($logado){
//     echo "<p>Bem-vindo</p>";
// }
// echo "</div>";
$usuario=[
    "nome"=>"Gian Diniz",
    "perfil"=>"Administrador",
    "permissoes"=>["Inserir","Alterar","Excluir","Visualizar"],
    "logado"=>true
]
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo
        <?=  $usuario["logado"] ? $usuario["nome"] : ''?>
    </title>
</head>
<body>
    <?php if ($usuario["logado"]): ?>
    <h1>Seja bem-vindo, <?= $usuario["nome"] ?></h1>
    <h2>Perfil: <?= $usuario["perfil"] ?></h2>

    <br>
    <h3>Permissões </h3>
    <ul>
        <?php foreach ($usuario["permissoes"] as $permissao):?>
            <li><?= $permissao ?></li>
        <?php endforeach;?>         
    </ul>
    <?php else: ?>
        <h1>O usuário NÃO está logado</h1>
    <?php endif; ?>
</body>
</html>
