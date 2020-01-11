<?php
    // Изучение PHP для начинающих | Урок #3 - Пишем "Hello World!"
    echo "Hello World!<br>";
    echo "Русский текст";



    // Изучение PHP для начинающих | Урок #4 - Комментарии в PHP
    echo "<br><br>";
    echo "Hi!"; // Эта строчка выводит Hi!
    /*
        Комментарий №1
        Комментарий №2
        Комментарий №3
    */
    echo "Hi!"; // Эта строчка выводит Hi!



    // Изучение PHP для начинающих | Урок #5 - Переменные и их типы
    echo "<br><br>";
    $myNumber = 45;
    $float = -3.25;
    $string = "Hello World!";
    $bool = true;

    echo "Переменная myNumber = $myNumber";
    echo "<br>";
    echo "Переменная float = $float";
    echo "<br>";
    echo "Переменная string = $string";
    echo "<br>";
    echo "Переменная bool = $bool";
    echo "<br>";
    $myNumber = 12;
    echo "Переменная myNumber = $myNumber";



    //Изучение PHP для начинающих | Урок #6 - Константы
    echo "<br><br>";
    echo PHP_VERSION;

    define("PI", 3.14);
    echo "<br>";
    echo PI;
    echo "<br>";
    echo defined("PI");



    //Изучение PHP для начинающих | Урок #7 - Арифметические операции
    echo "<br><br>";
    $x = 32;
    $y = 22.13;
    $summm = $x + $y;
    $diff = $x - $y;
    $mult = $x * $y;
    $dil = $x / $y;

    echo "Сумма из $x и $y = $summm<br>";
    echo "Разница из $x и $y = $diff<br>";
    echo "Умножение из $x и $y = $mult<br>";
    echo "Деление из $x и $y = $dil<br>";

    $z = 12;
    $ostatok = $x % $z;
    echo "Остаток от деления $x и $z = $ostatok<br>";

    $q = 400;
    $q /= 10;
    echo "$q<br>";
    $q = $q + 1;
    $q += 1;
    echo "$q";



    //Изучение PHP для начинающих | Урок #8 - Строковые операции
    echo "<br><br>";
    $str_1 = "<b>Первая строка</b> <input type=\"text\" />";
    $str_2 = "<i>Вторая строка</i>";

    echo $str_1 . " " . $str_2 . " \" \\";
    echo ' \' ';



    //Изучение PHP для начинающих | Урок #9 - Логические операции
    echo "<br><br>";
    $x = 12;
    $y = 34;
    $z = 4.25;

    $bool_1 = $x != $z;
    $bool_2 = $x <= $y;

    echo $bool_1 . "<br>" . $bool_2 . "<hr>";

    $bool_3 = !($x == $y);
    $bool_4 = $x == $y || $z < $y;
    $bool_5 = $z != $y && $x < $y;
    $bool_6 = $z != $x ^ $y < $z;
    echo "<br>" . $bool_3 . "<br>" . $bool_4 . "<br>" . $bool_5 . "<br>" . $bool_6;

    $bool = !($x != $y && $z < $x) || $x != $y;
    echo "<br> $bool = !($x != $y && $z < $x) || $x != $y";



    //Изучение PHP для начинающих | Урок #10 - Оператор эквивалентности
    echo "<br><br>";
    $string = "Example";
    $num = 0;

    $bool_1 = $string == true;
    echo "$bool_1 = $string == true;";

    $bool_2 = $num == "";
    echo "<br>$bool_2 = $num == \"\";<hr>";

    $bool_3 = $string === true;
    echo "$bool_3 = $string === true;";

    $bool_4 = $num === "";
    echo "<br>$bool_4 = $num === \"\";";



    //Изучение PHP для начинающих | Урок #11 - Условные операторы
    echo "<br><br>";
    $x = 10;
    $y = 5;

    if ($x == $y && $x != 12 && $y == 5 && ($x +5) == 15)
        echo "Ура!";
    else if ($x == 15 || $y != 7) {
        $num = 5;
        echo "Число № " . $num;
    } 
    else {
        echo "<br>";
        echo "Все сработало!";
    }

    if ($x == $y && $x != 12 && $y == 5 && ($x +5) == 15)
        echo "Ура!";
    
        $x == $y ? $string = "Да" : $string = "Нет";
        echo "<br>" . $string;


    
    //Изучение PHP для начинающих | Урок #13 - Циклы For, While и Do While
    echo "<br><br>";
    for ($i = 100; $i >= 80; $i -=2) {
        if ($i % 5 ==0) continue;
        if ($i <=87) break;
        echo "Цикл под номером № $i<br>";
    }

    echo "<br>";

    $x = 1;

    while ($x <= 10) {
        echo "Итерация под номером № $x<br>";
        if ($x == 7)
            for ($y =0; $y < 5; $y +=3)
                echo "Еще одна итерация - $y<br>";
        $x++;
    }

    $z  = 10;

    echo "<br>";

    do {
        echo "Операция выполнилась только один раз";
        $z++;
    } while ($z < 5);
?>