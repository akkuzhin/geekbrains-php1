<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задача №2</title>
</head>
<body>
<h2>Задача №2</h2>
<p>Напишите функцию, которая вычисляет доход по вкладу. В качестве аргумента принимается сумма вклада, срок в месяцах, годовой процент. Возвращается сумма вклада по окончанию срока.</p>
<?php
/*
* Сумма % - это доход, полученный через i-ый промежуток времени
* Р - изночальный объем вложений
* i - депозотная годовая ставка
* t - срок вложений
* Рассмотрим пример: разместим 100 000 рублей на полгода под %. Рассчитаем полученный доход:
*/
$sum = 100000;
const PERCENT = 6.75;
$term = 185;
function depositCalc ($P, $i, $t) {
    return ($P * $i * $t) / (365 * 100) ;
}
$percent = depositCalc($sum, PERCENT, 185);
?><p>Процентная ставка: <?php echo PERCENT; ?></p>
<p>Я получу: <?php echo $sum + $percent; ?></p>
<p>Проценты: <?php echo $percent; ?></p>

</body>
</html>