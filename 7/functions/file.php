<?php

function File_upload($field)
{
    if (empty($_FILES)) { //если пустой то возвращаем ошибку
        return false;
    }
    if (0 !== $_FILES[$field]['error']) { //если там не ноль то случилось там какая то ошибка
        return false;
    }
    if (is_uploaded_file($_FILES[$field]['tmp_name'])) { //если он был загружен
        $res = move_uploaded_file($_FILES[$field]['tmp_name'],
            __DIR__ . '/../images/' . $_FILES[$field]['name']);  //результат перекинет на потоянное место
        if (!$res) { //если не получилось то возвращаем ошибку, если получилось возвращем путь до файла
            return false;
        } else {
            return '/images/' . $_FILES[$field]['name'];
        }
    }
    return false;
}