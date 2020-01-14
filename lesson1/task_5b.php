<?php
    $password = 302390;

    $hotwire = 100000;
    while (true) {
        if ($hotwire >= 1000000) {
            echo "ОШИБКА! Пароль не шестизначный походу";
            break;
        }
        if ($hotwire == $password){
            echo "Пароль найден! Пароль - $hotwire";
            break;
        }
        $hotwire++;
    }
?>