<?php
    $password = 12345;    // Пароль, который необходимо подобрать
    $hotwirePass = "";      // Тут будет найденный пароль

    // Определение разрядности пароля
    function bit ($number, $bit = 0) {
        $a = $bit+1;
            if($number >= 10**$bit) {
                return bit ($number, $a);
            } else {
                return $bit;
            }
    }
    $passBit = bit($password);
    
    var_dump($passBit); // Смотрим, какая разрядность
    echo "<hr>";
    
    // Находим каждый символ строки исходного пароля перебором значений от 0 до 9, собирая из найденных значений массив
    $passwordString = (string)$password;
    for ($symbol = 0; $symbol < $passBit; $symbol++) {
        for ($i = 0; $i < 10; $i++) {
            if ($passwordString{$symbol} == $i) {
                $passArray[] = $i;
            } 
        }
    }

    print_r($passArray);    // Посмотрим собранный массив
    echo "<hr>";
    
    // Преобразуем полученный массив в строку
    $hotwirePass = implode("", $passArray);


    var_dump($hotwirePass); // Посмотрим на полученную строку
    echo "<hr>";

    // Вывод результата
    echo "Пароль найден! Пароль: $hotwirePass";
    
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    echo "<br><br><hr><hr><br>";

    $pass1 = 466999999;
    $pass2Se = 123456789;

    $pass2 = "";

    // Определение разрядности пароля
    $pass1Bit = bit($pass1);

    var_dump($pass1Bit); // Смотрим, какая разрядность
    echo "<hr>";

    // Приведём значения паролей к строкам
    $pass1String = (string)$pass1;
    $pass2SeString = (string)$pass2Se;

    // Если вторая цифра pass1 больше 5, то pass2 равен конкатенации цифр pass2Se от первого разряда к последнему
    if ($pass1String{1} > 5) {
        for ($i = $pass1Bit - 1; $i >= 0; $i--) {
            $pass2 .= $pass2SeString{$i};
        }

        // Вывод результата
        echo "pass2 равен конкатенации цифр pass2Se от первого разряда к последнему. <br>\$pass2 = $pass2";
    }

    // Если вторая цифра pass1 меньше или равно 5, то pass2 равен конкатенации цифр pass2Se от второго разряда до последнего и цифры первого разряда в конце
    else {
        for ($i = $pass1Bit - 2; $i >= 0; $i--) {
            $pass2 .= $pass2SeString{$i};
        }
        $pass2 .= $pass2SeString{$pass1Bit - 1};

        // Вывод результата
        echo "pass2 равен конкатенации цифр pass2Se от второго разряда до последнего и цифры первого разряда в конце. <br>\$pass2 = $pass2";
    }

?>    