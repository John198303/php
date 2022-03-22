<?php
 /*  первое

$a = 5;
    $b = '05';
    var_dump($a == $b);         // Сравнение по значению, $b приведется к типу integer
    var_dump((int)'012345');     // приведение к int
    var_dump((float)123.0 === (int)123.0); // разные типы данных
    var_dump((int)0 === (int)'hello, world'); // в строке нет цифр - int приведется к нулю. */


// второе
$h1 = 'Hello world';
$title = 'Hello world';

/* третье
$a = 1;
$b = 2;
$b = $a + $b;
$a = $b - $a;
$b = $b - $a;
var_dump($a, $b);

*/



?>

<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <title><?php echo $title ?></title>
    
 </head>
 <body>
  <h1><?php echo $h1 ?></h1>
  <p><?php echo 'Сейчас ' . date("F j, Y, g:i a") ?></p>
 </body>
</html>