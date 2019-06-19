<?php
/*
 * Изучите понятие «рекурсия», составьте рекурсивную
функцию вычисления чисел Фибоначчи, проверьте ее
работу
 */
function fibonaCHi($n)
{
    switch ($n) {
        case 0:
            return $n;
            break;
        case 1:
            return $n;
            break;
        case $n < 0: // числа Фибоначчи для отрицательных значений n
            return fibonaCHi($n + 2) - fibonaCHi($n + 1);
            break;
        default: // числа Фибоначчи для положительных значений n
            return fibonaCHi($n - 1) + fibonaCHi($n - 2);
            break;
    }
}
echo fibonaCHi(8); //21