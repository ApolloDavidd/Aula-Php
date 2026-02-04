<?php

    $precoBruto = 150.459;

    // Possiblidade 1- Atribuir a varíavel
    $precoArrendodado = round($precoBruto, 2);

    echo $precoArrendodado."<br>";

    echo "Arredonda para cima:".ceil($precoBruto)."<br>";
    echo "Arredonda para baixo:".floor($precoBruto)."<br>";

    // Possibilidade 2- Chamar diretamente
    echo round ($precoBruto,2);
    echo "<hr>";

    echo "<h2>Sort</h2>";

    $numeros = [100, 200, 1, 10, 13, 900];
    $maiorValor = max($numeros); // 1
    $menorValor = min($numeros); // 900

    echo "Maior valor: $maiorValor <br>";
    echo "Menor valor: $menorValor <br>";

    $valorAleatorio = rand(1,100);
    echo "Valor aleatório: $valorAleatorio <br>";
    
    echo "R$ " . number_format($precoBruto, 2, ',', '.'). "<br>";
    echo "<hr>";

    // PAUSA EXERCÍCIO N1
    $media = 5.236;

    $mediaConvertida = number_format($media, 1, ',', '.');

    // 5,2
    echo $mediaConvertida."<br>";
    echo "<hr>";

    echo "<h2>Manipulação de Strings</h2><br>";

    $email = "  contato@EMPRESA.com  ";
    $emailLimpo = trim($email);
    $emailMinusculo = strtolower($email);
    $emailMaiusculo = strtoupper($email);
    echo "<hr>";

    $vFrutas = "Maçã, Banana, Pera, Ameixa, Jambo,Jabuticaba,Limão";

    // Transforma a string num array

    $arrFrutas = explode(',',$vFrutas);

    $v2Frutas = implode(" - ", $arrFrutas);
    echo $v2Frutas."<br>";

    // Conta a quantidade de posições de um array
    echo count($arrFrutas)."<br>";

    echo str_replace("Maçã","Abacaxi",$vFrutas)."<br>";

    echo substr($v2Frutas, 0, 6)."<br>";

    echo strlen("Maçã")."<br>";

    echo mb_strlen("Maçã", 'UTF-8');

    echo "<hr>";
    echo "<h2>Poder dos Arrays</h2><br>";
    $clientes = ["João", "Maria"];
    $novos = ["José","Ana"];

    $todes = array_merge($clientes, $novos);

    array_push($todes, "Natan");
    print_r ($todes);

    echo "<br>";
    //echo in_array("Vitor", $todes);

    if(in_array("Vitor", $todes)){
        echo "<b>Usuário encontrado</b><br>";
    }else{
    echo "<b>Usuário não encontrado</b><br>";}
    echo "<hr>";
    // Pausa exercício
    echo "<h2>Exercício do domínio</h2>";


    $emails = "  ADMIN@EMPRESA.COM -,  contato@Site.COM  ,SUPORTE@dominio.com  ,   Vendas@Empresa.com ";

    $arrEmails = explode(',',$emails);

    $rplEmails = str_replace("-"," ", $arrEmails);
    
    echo "E-mail principal: ".trim(strtolower($rplEmails[0]));
    echo "<hr>";
    
    //Ordena por ordem alfabética (A-Z)
    sort($todes);

    echo "<br>".implode(", ",$todes);
    echo "<hr>";

    $usuario = "Sérgio";
    echo isset($usuario);
    echo empty($usuario);

    if(empty($usuario)){
        echo "<br> A varíavel está vazia<br>";
    }else{
        echo "<br> A varíavel está com valor<br>";
    }

    $usuarioAutenticado = $usuario ?? 'Visitante';

    echo "<br><br>$usuarioAutenticado";
    echo "<hr>";
    if(!isset($usuario)){
        $usuarioAutenticado = "Visitante";
    }else{
        $usuarioAutenticado = $usuario;
    }

    //Inicio; Condição de parada; Incremento
    // for($i = 0;$i<=10;$i++){
    //     echo "Repetindo várias vezes<br>";
    // }    

    for($elefantes = 1;$elefantes<=10;$elefantes++){
        if($elefantes==1){
            echo "1 elefante incomoda muita gente<br>";
        }else{  
            echo  "$elefantes elefantes incomodam muito mais<br>";
        }
    }    
?>