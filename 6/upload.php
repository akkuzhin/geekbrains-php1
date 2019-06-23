<?php
require __DIR__ . '/functions.php';
session_start();

if (isset($_FILES) && !empty($_FILES['images'])) {
    if ($_FILES['images']['error'] == 0) {
        if (inMimeType($_FILES['images']['type'])) {
            $tempPlace = $_FILES['images']['tmp_name'];
            if (is_uploaded_file($tempPlace)) {
                if (file_exists(__DIR__ . '/images')) { //Проверяем сущесвует ли папка
                    move_uploaded_file($tempPlace, FULLPATHFILE . '/' . $_FILES['images']['name']);
                } else {
                    $_SESSION['error'] = 'Папка с таким именем не обнаружено';
                }
            } else {
                $_SESSION['error'] = 'Файл не был загружен при помощи HTTP POST';
            }
        } else {
            $_SESSION['error'] = 'Загрузка файлов с таким расширением запрещена!';
        }

    } else {
        $_SESSION['error'] = 'Ошибка при загрузке файла!';
    }
}

header('Location: /6/index.php');
exit;