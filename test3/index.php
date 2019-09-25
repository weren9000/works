<!DOCTYPE html>
<html lang="en">
<head>
    <title>Задание 3</title>
</head>

<body>
<form action="index.php" method="post" name="form">

Сколько хипстеров? <input name="man" type="text" value=""><br><br>
Сколько смузи? <input name="smooth" type="text" value=""><br><br>

<input type="submit" name="Старт!">

</form>
</body>

</html>

<?php
include 'smoothies.php';

// //Проверка функции 
if (isset($_POST['Старт!'])) {
    if (is_numeric($_POST['man']) and is_numeric($_POST['smooth'])) {
        echo "<br>" . floor($_POST['man']) . " хипстеров получат по " . smoothies($_POST['smooth'], $_POST['man']) . " смузи";
    } else {
        echo "<br>Заполните строки целыми числами!";
    }

}

?>

