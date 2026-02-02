<?php
//ECHO: comando para exibir conteúdo na tela
echo "Olá Mundo <br>";

echo "<hr>";

$nomePaciente = "Apollo";
$idade = (int) "32";
$nomeProcedimento = "Endoscopia";
$precisaPreparo = true;

//concatenação
//echo "O nome do paciente é ".$nomePaciente; 
echo "O nome do paciente é $nomePaciente <br>";       
echo "<b>Idade:</b> $idade<br>";
echo "<b>Procedimento:</b> $nomeProcedimento <br>";
if($precisaPreparo){
   echo "Enviar Procedimento de preparação via e-mail"; 
}

echo "<hr>";
/*DEBUG - Depurar
echo gettype($idade)."<br>";
var_dump($nomeProcedimento);
*/

//$idade >= 18

/*$verificaVariavel = is_int($precisaPreparo)
if(is_int($verificaVariavel)){
    echo "O valor é inteiro";
}
else{
    echo "O valor não é inteiro";
}
*/


// if(is_int($precisaPreparo)){
//     echo "O valor é inteiro";
// }
// else{
//     echo "O valor não é inteiro";
// }

echo "<h1>Trabalhando com aritmética</h1><br>";
$nota1 = 10;
$nota2 = 5.5;
$nota3 = 9.23;
$nota4 = 2.025;

$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
echo round($nota1, 2)."<br>";
echo round($nota2, 2)."<br>";
echo round($nota3, 2)."<br>";
echo round($nota4, 2)."<br>";
echo round($media , 2)."<br>";
echo "<hr>";

$cores = ["Amarelo","Azul","Vermelho","Verde"];
foreach($cores as $cor){
    echo $cor."<br>";
}

echo "<hr>";

$usuario = [
    "nome" => "Karien",
    "email"=>"karien.amaistop@senac.br"
];

$usuarios = [
    ["Professor" => "Karien", "email" => "karien.amaistop@senac.br"],
    ["Professor" => "Luan", "email" => "luan.omaismais@senac.br"]
];



foreach($usuarios as $us){
    echo $us["Professor"]."<br>";
    echo $us["email"]."<br><br>";
};

for($i=0; $i<4; $i++){
    echo $cores[$i]."<br>";
};
?>