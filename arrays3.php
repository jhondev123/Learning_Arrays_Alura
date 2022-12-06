<?php

$alunos2021 = [
    'maria',
    'fiatuno',
    'curta'
];

$novosalunos = [
  'ricardo',
  'rafael',
  'david'
];

$alunos2022 = array_merge($alunos2021,$novosalunos); // junta os arrays mas n preserva as chaves
var_dump($alunos2022);
$alunos2022 = [...$alunos2021, "jhonattan", ...$novosalunos]; // junta os valores do array podendo até passar dados no meio
// operador de unpacking ou spread operator

array_push($alunos2022 , 'fiat','uno ','tunado');// adiciona itens no vetor
$alunos2022[] = 'curtarelli';// adiciona itens no vetor
array_unshift($alunos2022,'mari'); //adiciona item no inicio do vetor

array_shift($alunos2022); //retorna o primeiro elemento do array e apaga ele
array_pop($alunos2022);//retorna o ultimo elemento do array e apaga ele
var_dump($alunos2022);