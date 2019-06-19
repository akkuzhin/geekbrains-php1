<?php
/*
 * напишите функцию которая создает массив из $n случайных чисел и возвращает его в отсортированном по убыванию порядке
 */

function randNewArray($number)
{
    $num = [];
    $i = 1;
    while($i <= 10) {
        $newArr[] = rand(0, $number);
        $i++;
    }
    rsort($newArr);
    return $newArr;
}
var_dump(randNewArray(1024)); 