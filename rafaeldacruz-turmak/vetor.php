<?php
//Criando um vetor de frutas
$fruta = ["Maçã", "Banana", "Morango", "Uva"];

//Acessando um item especifico
echo "Eu gosto de". $fruta[3]; // Resultado: Banana

//Adicionando um novo item
$fruta[] = "Laranja";

//Percorrendo o vetor com o comando "foreach"
//(o mais facil para PHP)
foreach($fruta as $fruta) {
    echo "Fruta: $fruta <br>";
}