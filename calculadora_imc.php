<?php

$nome = readline("Digite seu nome: ");

function iniciar($user){
    echo "Bem-vindo(a) $user\n";
    echo "Iniando a calculadora de IMC\n";
}
iniciar($nome);

$peso = readline("Digite seu peso: \n");
$altura = readline("digite sua altura: \n");

function calcular($peso, $altura){
    $resultado = $peso/$altura**2;
    echo "Seu Índice ideal é: $resultado\n";
}

calcular($peso, $altura);