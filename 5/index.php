<?php

require __DIR__ . '/functions.php';


if (!isUser()) {
    header('Location: /5/index.html');
    exit;
}
?>

<h1>Привет, <?php echo getUser(); ?></h1>
<a href="/5/logout.php">ВЫХОД</a>