<?php
    $rangePrimeArray = [1, 100]; // Массив диапазона проверяемых значений

    // Функция для нахождения простых и составных чисел содержащихся в диапазоне, задаваевом аргументом
	function getPrimeNumber($rangeArray)		
	{
        // Массив результата
        $resArray =[
            "Prime" => [],
            "Composite" => []
        ];

        $array = range($rangeArray[0], $rangeArray[count($rangeArray)-1]); // Преобразование массива диапазона в массив со всеми целыми числами, содержащимися в диапазоне

        $primeNumber = false;   // Флаг простоты числа
        
		foreach($array as $element)
		{
            if($element < 2) {$resArray["Composite"][] = $element;} // если меньше двух то составное

			if($element == 2) {$primeNumber = true;} // если два то простое
            
            // Проверка остальных чисел остатком от деления на числа в диапазоне от двух до округлённого корня из проверяемого числа
			$j = round(sqrt($element)); 
			for($i = 2; $i <= $j; $i++)
			{			
				if (!($element % $i))
				{
                    $resArray["Composite"][] = $element;   // набор в массив составных чисел
					break;
				}
				elseif ($i == $j)
				{
					$primeNumber = true;
				}
			}
				if ($primeNumber)
				{
                    $resArray["Prime"][] = $element;    // набор в массив простых чисел
					$primeNumber = false;
				}
        }

        // Получение строки со списком простых чисел, разделённых символом | и пробелами
        $printPrime = implode(" | ", $resArray["Prime"]);

         // Получение строки со списком составных чисел, разделённых символом | и пробелами
        $printComposite = implode(" | ", $resArray["Composite"]);
    
        // Вывод результата
        echo "Найденные простые числа: $printPrime" . "<hr>" . "Найденные составные числа: $printComposite";
	}
	
    getPrimeNumber($rangePrimeArray);		// Вызов функции 
?>
