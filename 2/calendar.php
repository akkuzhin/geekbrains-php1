<?php

function calendar(int $day, int $month, $year=2019)
{
    if ($day >= 1 && $day <= 31){
        switch ($month){
            case 1:
                return $day . ' января ' . $year;
                break;
            case 2:
                if ($day >= 1 && $day <= 28){
                    return $day . ' февраля ' . $year;
                } else {
                    return 'В феврале месяце только 28 дней';
                }
                break;
            case 3:
                return $day . ' марта ' . $year;
                break;
            case 4:
                if ($day >= 1 && $day <= 30){
                    return $day . ' апреля ' . $year;
                } else {
                    return 'В апреле месяце только 30 дней';
                }
                break;
            case 5:
                return $day . ' мая ' . $year;
                break;
            case 6:
                if ($day >= 1 && $day <= 30){
                    return $day . ' июня ' . $year;
                } else {
                    return 'В июне месяце только 30 дней';
                }
                break;
            case 7:
                return $day . ' июля ' . $year;
                break;
            case 8:
                return $day . ' августа ' . $year;
                break;
            case 9:
                if ($day >= 1 && $day <= 30){
                    return $day . ' сентября ' . $year;
                } else {
                    return 'В сентябре месяце только 30 дней';
                }
                break;
            case 10:
                return $day . ' октября';
                break;
            case 11:
                if ($day >= 1 && $day <= 30){
                    return $day . ' ноября ' . $year;
                } else {
                    return 'В ноябре месяце только 30 дней';
                }
                break;
            case 12:
                return $day . ' декабря ' . $year;
                break;
            default:
                return 'Введите число для месяца от 1 до 12';
                break;
        }
    } else {
        return 'Введите число от 1 до 31!';
    }
}

echo calendar(17, 6); //17 июня 2019