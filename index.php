<?php
// Первое задание
$a = -5;
$b = -10;
$c = NULL;

if($a >= 0 and $b >= 0){
    $c = $a - $b;
}elseif($a < 0 and $b < 0){
    $c = $a * $b;
}else {
    $c = $a + $b;
}
echo $c;




// Второе задание

$a = random_int(0, 15);
switch($a){
    case "$a":
        while($a <= 15){
            echo $a++; 
        }		
     break;      
}





// Третье задание

function summ($a, $b){
    return ($a + $b);
}
function substraction($a, $b){
    return ($a - $b);
}
function multiplication($a, $b){
    return ($a * $b);
}
function division($a, $b){
    return ($a / $b);
}

echo (division(4,8));




// Четвертое задание

function mathOperation($arg1, $arg2, $operation){
    if($operation == 'summ'){
        return summ($arg1,$arg2);
    }elseif ($operation == 'substraction') {
        return substraction($arg1,$arg2);
    }elseif ($operation == 'multiplication') {
        return multiplication($arg1,$arg2);
    }else {
        return division($arg1,$arg2);
    }
}

$total = mathOperation(44, 5, 'division');
echo $total;

// Или

function mathOperation1($arg1, $arg2, $operation){
    switch($operation){
        case 'summ':
            return summ($arg1,$arg2);
        break;
        case 'substraction':
            return substraction($arg1,$arg2);
        break;
        case 'multiplication':
            return multiplication($arg1,$arg2);
        break;
        case 'division':
            return division($arg1,$arg2);
        break;
    }
}
echo $case = mathOperation1(5, 6, 'summ');
$title = "Hello";
$h1 = "Второй урок";


?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <title><?=$title ?></title>
    
 </head>
 <body>
  <h1><?=$h1 ?></h1>
  
 </body>
 <footer>
 <?= 'Сейчас ' . date("F j, Y, g:i a") ?>
 </footer>
</html>

<?php
// Шестое задание   

function power($val, $pow){
	return ($pow == 1) ? $val : $val * power($val, $pow - 1);
}
echo power(2, 3);

// Седьмое задание



function getName($hour, $minute){
	
		
	if($hour == 1 or $hour == 21){
		$h = $hour . ' час';
	}
	elseif($hour > 1 and $hour < 5 or $hour > 21 and $hour < 25){
		$h = $hour . ' часа';
	}
	else{
		$h = $hour . ' часов';
	}
	if($minute == 1 or $minute == 21){
		$m = $minute . ' минута';
	}
	elseif($minute > 1 and $minute < 5 or $minute > 21 and $minute < 25){
		$m = $minute . ' минуты';
	}
	else{
		$m = $minute . ' минут';
	}
	return $h .' '. $m;
}

echo getName(12, 3);



?>