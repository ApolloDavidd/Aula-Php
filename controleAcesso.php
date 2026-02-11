<?php


$idade = 18;
$conviteVIP = false;
$listaConvidados =true;
$pulseiraAcesso = true;

echo "<h1>Exercício de operações lógicas</h1><br>";
//https://www.youtube.com/playlist?list=PLHz_AreHm4dm7ZULPAmadvNhH6vk9oNZA

if($idade >=18 && ($conviteVIP == true || $listaConvidados == true) && $pulseiraAcesso == true){
    echo "<h3>Bem vindo lindo</h3><br>";
}else{
    echo "<h3>Sai daqui rapá</h3><br>";
}

?>