<?php 
echo "Bem vindo a aula de revisão do PHP <br>"; //a tag <br> serve para quebrar a linha.
//O comando echo serve para mostrar o que está escrito(texto) em uma variável, ou apenas para mostrar algo escrito, tudo que for texto precisa estar dentro de aspas.

//Como declarar variáveis?
//Primeiro digite "$" e depois coloque um nome para a variável e depois coloque o conteúdo dentro dela entre aspas, não pode ter acentos, espaços e "ç", sempre termine o código com ;

$variavel="Essa é um exemplo de frases, ou conteúdo que vai estar dentro da variável<br>";

//Para mostrar a váriavel, basta escrever "echo e colocar a variável.

echo $variavel;

//Estruturas Condicionais

$cor="Amarelo";
if($cor == "Verde") //if se trata da primeira condição
{
    echo "Você pode atravessar a faixa de pedestre!<br>";
}
elseif($cor == "Amarelo")// elseif se trata da segunda condição até a penúltima condição.
{
    echo "Atenção, pois o sinal está prestes a fechar<br>";
}
else //Por se tratar da última opção, o else não precisa colocar condição
{
    echo "Pare, o sinal está vermelho<br>";
}

//Equação do 2ºGrau

$a=2;
$b=8;
$c=2;
$delta=($b*$b)-4*$a*$c;

if($delta == 0)
{
    echo "Então teremos um valor real! <br>";
}
elseif($delta > 0)
{
    $x1= (-($b*$b)
    echo "Teremos dois valores reais! <br>";
}
else 
{
    echo "Não existe valores reais para esta equação!";
}





?>