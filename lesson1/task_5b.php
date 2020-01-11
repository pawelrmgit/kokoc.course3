<?php
    $password = 302390;

    for ($hotwire = 0; $hotwire < 1000000; $hotwire++) {}

    $hotwire = 0;
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