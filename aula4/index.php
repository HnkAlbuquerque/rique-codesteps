<?php

$alunos = [
    'smokinho',
    'suna',
    'henrique',
    'rob',
    'joninha'
];


$nome = 'nome';

$notas = [2,4,10,5,8];


$matriz = [
    [1,2,3,4],
    [3,9],
    [5,2,2,5,7,8,9]
];

$alunosNotas = [
    'suna' => 75,
    'smokinho' => 70,
    'rob' => 90,
    'nat' => 90,
];


$frutas = [
    'frutas vermelhas' => ['morango', 'cereja', 'amora'],
    'frutas amarelas' => ['banana', 'mamão'],
    'frutas citricas' => 'limão'
];

//echo count($matriz[0]);
for ($i = 0; $i < count($matriz); $i++) {
   // echo "ESTOU NA LINHA  $i <BR>";
   for ($j = 0; $j < count($matriz[$i]); $j++) {
   // echo "ESTOU NA COLUNA $j COM O VALOR ". $matriz[$i][$j] ."<BR>";
   }
}

foreach ($array as $key => $value) {
}

foreach ($alunosNotas as $aluno => $nota) {
  //  echo $aluno . ' ' . $nota . '<br>';
}

$random = 0;
while ($random != 10) {
    $random = rand(0,40);
    //echo $random .'<br>';
}


var_dump($random_number_array);


