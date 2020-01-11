<?php
    $positive = 0;

    for($i = 0; $i < 100; $i++) {
        $computer = rand(0, 1);
        if ($computer == 1) {
            $positive++;
        }
    }

    echo "$positive<br>"; // Тестовый вывод количества

    if ($positive > 50) {
        echo "Наш компьютер - оптимист";
    } else if ($positive == 50) {
        echo "Наш компьютер - оптипессимист";
    } else {
        echo "Наш компьютер - пессимист";
    }
?>