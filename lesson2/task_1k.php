<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  <?php
    $arr = [
            'cms' => ['joomla', 'wordpress', 'drupal'],
            'colors' => ['blue' => 'голубой', 'red' => 'красный', 'green' => 'зеленый']
        ];
    echo $arr['cms'][0];
    echo "<br>";
    echo $arr['cms'][2];
    echo "<br>";
    echo $arr['colors']['green'];
    echo "<br>";
    echo $arr['colors']['red'];
  ?>  
</body>
</html>
