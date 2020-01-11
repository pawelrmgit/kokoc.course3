<?php
    $bank = [
        "Ivan" => [1000, -500, 1000, 500, 500, -1000],
        "Alexey" => [1000, -1000, 500, -500, 1000, 1000],
        "Jonn" => [1000, -1000, 500, -500, 123, 1000],
        "Pit" => [1000, -1000, 500, -500, 124, 1000],
        "Volodya" => [1000, -1000, 500, -500, 123, 1000],
        "Dmitriy" => [1000, -1000, 500, -500, 152, 1000],
        "Nemo" => [1000, -1000, 500, -500, 151, 1000],
        "Johan" => [1000, 1000, 500, 500, -2000]
        ];

    // Функция для подсчёта суммы значений в строках массива. Возвращает массив с результатами с соответствующими ключами    
    function cashSum($array) {      
        $unOrderRes = [];   // Массив с результатом
        foreach ($array as $name => $score) {
            $unOrderRes[$name] = 0;
            foreach ($score as $money) {
                $unOrderRes[$name] += $money;
            }
        }
        return $unOrderRes;
    }
    
    // Функция для сортировки массива
    function arraySort($array) {    
        $sortArrayUnNamed = []; // Хранит промежуточный результат с отсортированным массивом но без изначальных ключей
        $sortArrayNamed = [];   // Хранит итоговый результат - отсортированный массив с соответствующими ключами
        $saveVal = 0;   // Вспомогательная переменная для хранения результата в процессе перемещения во время сортировки
        
        // Преобразование ассоциативного массива
        foreach ($array as $values) {
            $sortArrayUnNamed[] = $values;
        }
        
        // Сортировка массива по убыванию
        for ($saveIndex = 0; $saveIndex < count($sortArrayUnNamed)-1; $saveIndex++) {
            for ($index = 0; $index < count($sortArrayUnNamed)-1; $index++) {
                if ($sortArrayUnNamed[$index] < $sortArrayUnNamed[$index+1]) {
                    $saveVal = $sortArrayUnNamed[$index+1];
                    $sortArrayUnNamed[$index+1] = $sortArrayUnNamed[$index];
                    $sortArrayUnNamed[$index] = $saveVal;
                }
            }
        }
        
        // Присваивание соответствующих ключей
        foreach ($sortArrayUnNamed as $currentVal) {
            foreach ($array as $name => $value) {
                if ($currentVal == $value) {
                    $sortArrayNamed[$name] = $currentVal;
                }
            }
        }
        
        return $sortArrayNamed;
    }
    
    $unOrderRes = cashSum($bank); // Получаем не отсортированный массив с суммами денег у каждого человека

    $orderRes = arraySort($unOrderRes); // Получаем отсортированный по убыванию массив с результатом

    // Вывод информации о счетах
    foreach ($orderRes as $name => $cash) {
        echo "На данный момент $name имеет на своем счету $cash<hr>";
    }
    
?>