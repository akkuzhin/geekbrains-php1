<?php
/*
 * Создайте простейший калькулятор.
 * Он должен состоять из двух полей для ввода числе, а между ними - select для выбора операции.
 * По нажатию на кнопку "=" должно вычислиться значения выражения.
 */
    $operand = [
        'addition' => '+',
        'subtraction' => '-',
        'multiplication' => '*',
        'division' => '/',
    ];

    if(isset($_POST['x']) && isset($_POST['y'])) {
       $x = $_POST['x'];
       $y = $_POST['y'];
    } else {
      $x = false;
      $y = false;
    }

    if(isset($_POST['operation']) && array_key_exists($_POST['operation'],$operand)) {
      $operation = (string)$_POST['operation'];
    } else {
        $operation = false;
    }

    function CalC($x, $operation, $y)
    {
        //var_dump($operation);
        switch ($operation) {
            case 'addition':
                return $x + $y;
                break;
            case 'subtraction':
                return $x - $y;
                break;
            case 'multiplication':
                return $x * $y;
                break;
            case 'division':
                if ($y == 0) {
                    return 'Деление на ноль невозможно!';
                } else {
                    return $x / $y;
                }
            default:
                return 'Операция не найдено!';
                break;
        }
    }

    $result = CalC($x, $operation, $y);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Калькулятор</title>
</head>
<body>
<h2>Калькулятор</h2>
<hr>
<form action="/index.php" method="post">
    <input type="number" name="x" value="<?php echo $x; ?>" placeholder="введите число X">
    <select name="operation">
        <?php foreach ($operand as $name => $symbol): ?>
            <option value="<?php echo $name; ?>"><?php echo $symbol; ?></option>
        <?php endforeach; ?>
    </select>
    <input type="number" name="y" value="<?php echo $y; ?>" placeholder="введите число Y">
    <input type="submit" value="=">
</form>
<h3><?php echo $result; ?></h3>
</body>
</html>