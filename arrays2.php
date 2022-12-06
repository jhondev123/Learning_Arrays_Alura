<?php
$notasString = [
    [
        'aluno' => 'maria',
        'nota' => 10
    ],
    [
        'aluno' => 'fiatuno',
        'nota' => 7
    ],
    [
        'aluno' => 'curta',
        'nota' => 5
    ]
];

$notasString2 = [
    [
        'aluno' => 'fiatuno',
        'nota' => 7
    ],
    [
        'aluno' => 'curta',
        'nota' => 5
    ]
];
//var_dump(array_diff($notasString, $notasString2)); // verifica os valores dos arrays e ve se tem algum faltando
//var_dump(array_diff_key($notasString, $notasString2)); // verifica as chaves dos arrays e ve se tem algum faltando
//var_dump(array_diff_assoc($notasString, $notasString2)); // verifica as chaves e os valores dos arrays e ve se tem algum faltando

$alunosfaltantes = array_diff_assoc($notasString,$notasString2);
var_dump(array_keys($alunosfaltantes)); //array_keys busca as chaves dos arrays
var_dump(array_values($alunosfaltantes)); //array_keys busca os valores dos arrays
$notasAlunos = array_keys($notasString); //pega as keys do array
$nomesAlunos = array_values($notasString); // pega os values do array
var_dump(array_combine($nomesAlunos,$notasAlunos)); //combina as keys e values do array e monta um novo
var_dump(array_flip($alunosfaltantes[])); // inverte as keys e values