<?php

function numeroMaior($num1, $num2) {
    if ($num1 > $num2) {
        return $num1 . ' é maior que ' . $num2;
    } elseif ($num1 == $num2) {
        return $num1 . ' é igual ' . $num2;         
    } else {
        return $num1 . ' é menor que ' . $num2;
    } 
}
echo numeroMaior(1,6);

