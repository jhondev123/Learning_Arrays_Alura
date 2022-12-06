<?php
function ordenanotas(array $nota1, array $nota2):int
{
return $nota1['nota'] <=> $nota2['nota']; // operador que verifica se a primeira nota e menor que a segunda e retorna negativo
    // se a 2 nota for menor que a primeira retorna positivo
    //se for igual retorna 0
}
$notas = [
    10,8,6,5
];

sort($notas); // ordena o array do menor pro maior
rsort($notas); // ordena o array do maior pro menor, R de reverse, ela perde as chaves se for array assoativo
asort($notas); // ordena o array de forma ordenada mantendo as chaves
ksort($notas); // ordena por key em forma alfabético crescente
krsort($notas); // ordena por key em forma alfabético decrescente
//uksort($notas, 'ordenanotas'); // // ordena a array usando a funcao criada de forma decresente alfabética
//gettype($notas); //pega o tipo da variavel
//is_array($notas); // verifica se é um array
//array_is_list($notas); //retorna true se for array numerico, começa em zero e é crescente; do contrario e false

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
// usar o usort de ordenação pra array

//usort($notasString, 'ordenanotas'); // ordena a array usando a funcao criada

var_dump(array_key_exists("curta",$notasString)); //verifica se uma chave existe dentro do array
var_dump(isset($notasString['maria'])); // verifica se a chave existe e o valor n é nulo
var_dump(in_array('curta',$notasString)); //verifica se existe o valor curta nos valores do array
var_dump(in_array('curta',$notasString,true)); // verifica de forma mais rigorosa

echo array_search(10,$notas); // verifica a key do valor informado
echo array_search(10,$notas,true); // verifica a key do valor informado e se é inteiro