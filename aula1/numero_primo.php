<?php

$numero = 450;
$divisoresQuantidade = 0;
$divisores = [];

$j = 0;
for ($i = 1; $i <= $numero; $i++) {
    if ($numero % $i == 0) {
        $divisoresQuantidade++;
        $divisores[$j] = $i;
        $j++;
    }
}

if ($divisoresQuantidade == 2) {
    print_r($numero . " é um número primo");
} else {
    print_r($numero . " não é primo por que é divisivel por ");
    for($i = 0; $i < count($divisores); $i++) {
        print_r($divisores[$i] . ", ");
    }
}
