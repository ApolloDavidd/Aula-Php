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
    'interesses' => $_POST['interesses'] ?? '',
    'cidade' => $_POST['cidade'] ?? '',
    'mensagem' => $_POST['mensagem'] ?? ''
    ];
    
    foreach($dados as $dado){
        
    }
?>