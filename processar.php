<?php
// echo"<pre>";
//     print_r($_GET);
// echo"</pre>";

// if(isset($_GET['nome'])){
//     echo "<b> ".$_GET['nome']."</b>";
// }

// $nome = $_GET['nome'] ?? '';

// if(empty($nome)){
//     echo "Digite um nome";

//     // header ("location:form1.html");
//     header("Refresh: 3; url=form1.html");
// }
    $dados = [
    'nome' => $_POST['nome'] ?? '',
    'email' => $_POST['email'] ?? '',
    'genero' => $_POST['genero'] ?? '',
    'interesses' => $_POST['interesses'] ?? [],
    'cidade' => $_POST['cidade'] ?? '',
    'mensagem' => $_POST['mensagem'] ?? ''
    ];
    
    foreach($dados as $campos => $valor){
        if(empty($valor)){
            echo "O campo $campos é obrigatório<br>";
        }
    }
    if(!str_contains($dados['email'], '@')){
        echo "O e-mail é invalido<br>";
    }

    // if(!is_array($dados[$interesse])){
    //     echo "Você não possui interesses";
    // }
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['foto'])) {
    $arquivo = $_FILES['foto'];
    
    // 1. Validar extensão
    $extensao = pathinfo($arquivo['name'], PATHINFO_EXTENSION);
    if ($extensao !== 'jpg' && $extensao !== 'png') {
        die("Apenas JPG ou PNG são permitidos.<br>");
    }

    // 2. Renomear para evitar conflitos/ataques
    $novoNome = uniqid() . "." . $extensao;
    $destino = "uploads/" . $novoNome;

    // 3. Mover do diretório temporário para a pasta final
    if (move_uploaded_file($arquivo['tmp_name'], $destino)) {
        echo "Arquivo salvo com sucesso!<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem vindo</title>
</head>
<body>

    <img src="<?=$destino?>"><br>
    Bem-vindo, <?= $dados['nome'] ?>
  <hr>
 
  <p> Seu e-mail é: <b> <?= $dados['email'] ?> </b></p>
 
  <p> Áreas de interesses: </p>
  <ul>
    <?php foreach($dados['interesses'] as $interesses): ?>
        <li> <?= $interesses?>
        <?php endforeach?>
  </ul>
 
    <p> Cidade: <b> <?= $dados['cidade'] ?> </b></p>
</body>
</html>