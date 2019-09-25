<!DOCTYPE html>
<html lang="en">
<head>
    <title>Задание 2</title>
</head>

<body>
<p><b>Введите данные</b></p>
<form action="index.php" method="post" name="form">

Введите префикс <input name="pre" type="text" value=""><br><br>
Введите слова (через пробел) <input name="name" type="text" value=""><br><br>

<input type="submit" name="Старт!">

</form>
</body>

</html>

<?php
include_once 'mathprefix.php';

// //Проверка функции
if (isset($_POST['Старт!'])) {
    if (($_POST['pre'] != null) and ($_POST['name'] != null)) {
        $name = explode(" ", $_POST['name']);
        $res = mathprefix($_POST['pre'], $name);
        foreach ($res as $result) {
            echo "<br>" . $result;
        }
    } else {
        echo "<br>Заполните строки!";
    }

}

?>
