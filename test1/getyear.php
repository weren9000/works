<?php

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    function highGrade($year)
    {
        if(is_numeric($year)){
            if ($year % 4 == 0)
            # Год високосный
            {
                $result = 'ДА';
            } else
            # Год не високосный
            {
                $result = 'НЕТ';
            }
        } else 

        {
            $result = ' ОШИБКА ВО ВХОДНЫХ ДАННЫХ';
        }

        return $result;
    }
    echo $hint .= highGrade($q);
}


?>
