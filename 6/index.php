<?php
require __DIR__.'/functions.php';
session_start();
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Загрузка файлов</title>
</head>
<body>
    <?php foreach (readFileImages() as $images):?>
        <img src="/6/images/<?php echo $images; ?>" alt="Языки програмирования" width="200">
        <hr>
    <?php endforeach; ?>
<hr>
    <h2>
        <?php echo $_SESSION['error'];
            unset($_SESSION['error']);
            session_destroy();
        ?>
    </h2>
<form action="/6/upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="images">
    <input type="submit" >
</form>
</body>
</html>
