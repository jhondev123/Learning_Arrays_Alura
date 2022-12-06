<?php

$dados = [
   "nome" => 'jhonattan',
    'nota' => 10,
    'idade' => 15
];

extract($dados);// cria variaveis com nome das chaves das keys e os valores mantem
var_dump(compact('nome','nota','idade')); //cria variaveis com esses nomes
var_dump($nome,$nota,$idade);

