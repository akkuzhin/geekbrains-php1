<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Фотогалерея</title>
</head>
<body>

<table border="1">
    <tr>
        <th>
            Названия
        </th>
        <th>
            Фото
        </th>
    </tr>
    <?php foreach($items as $item): ?>
    <tr>
        <td>
            <?php echo $item['nameFile']; ?>
        </td>
        <td>
            <img src="<?php echo $item['pathToFile']; ?>" width="200">
        </td>
    </tr>
    <?php endforeach;?>
</table>

<a href="/add.php">Добавить фото</a>


</body>
</html>