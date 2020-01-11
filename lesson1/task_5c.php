<?php
    $pass1 = 436;
    $pass2Se = 123;

    // Разложение  $pass1 на сотни, десятки и единицы
    $pass1_100 = 0;
    $pass1_10 = 0;
    $pass1_1 = 0;

    while ($pass1 > 100) {
        $pass1 -= 100;
        $pass1_100++;
    }
    while ($pass1 > 10) {
        $pass1 -= 10;
        $pass1_10++;
    }
    $pass1_1 = $pass1;

    // Разложение  $pass2Se на сотни, десятки и единицы
    $pass2Se_100 = 0;
    $pass2Se_10 = 0;
    $pass2Se_1 = 0;

    while ($pass2Se > 100) {
        $pass2Se -= 100;
        $pass2Se_100++;
    }
    while ($pass2Se > 10) {
        $pass2Se -= 10;
        $pass2Se_10++;
    }
    $pass2Se_1 = $pass2Se;

    // Необходимая проверка и вывод результата
    if ($pass1_10 > 5) {
        $pass2 = $pass2Se_1 . $pass2Se_10 . $pass2Se_100;
        echo "\$pass2 =" . "\"цифра первого разряда из \$pass2Se\" . \"число второго разряда из \$pass2Se\" . \"число третьего разряда из \$pass2Se\"" . " = $pass2";
    }
    else {
        $pass2 = $pass2Se_10 . $pass2Se_100 . $pass2Se_1;
        echo "\$pass2 =" . "\"цифра второго разряда из \$pass2Se\" . \"число третьего разряда из \$pass2Se\" . \"число первого разряда из \$pass2Se\"" . " = $pass2";
    }
?>