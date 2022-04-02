<?php

// Первое задание

$i = 1;
while($i <= 100){
    if($i % 3 == 0){
        echo $i . ' ';
    }
    $i++;
}

// Второе задание

$i = 0;
do{
    if($i == 0){
        echo ($i . ' - Это ноль' . '<br>');
    }elseif($i % 2 == 0){
		echo ($i . ' - Это четное число' . '<br>');
    }else{
        echo($i . ' - Это нечетное число' . '<br>');
    }
    $i++;
}while($i <= 10);

// Третье задание

$arr = [
    'Московская область:' => ['Москва, Зеленоград, Клин'],
    'Ленинградская область:' => ['Санкт-Петербург, Всеволожск, Павловск, Кронштадт'],
    'Рязанская область:' => ['Касимов, Кораблино, Михайлов']
];

function city($array){
	
	foreach($array as $key => $city){
		echo $key . '<br>';
		for($i = 0; $i < $arrayLenght = count($array[$key]); $i++){
			if($i == $arrayLenght -1){
				echo $array[$key][$i] . '. <br>';
			}else{
			echo $array[$key][$i] . ', ';
			}		
	   }
	}
}

city($arr);
// Четвертое задание

function translite($let){
    $letter = [
        "а" => "a", 
		"б" => "b", 
		"в" => "v", 
		"г" => "g", 
		"д" => "d", 
		"е" => "e", 
		"ё" => "yo",
		"ж" => "zh", 
		"з" => "z", 
		"и" => "i", 
		"й" => "y", 
		"к" => "k", 
		"л" => "l", 
		"м" => "m",
		"н" => "n", 
		"о" => "o", 
		"п" => "p", 
		"р" => "r", 
		"с" => "s", 
		"т" => "t", 
		"у" => "u",
		"ф" => "f", 
		"х" => "h", 
		"ц" => "ts", 
		"ч" => "ch", 
		"ш" => "sh", 
		"щ" => "s'h", 
		"ъ" => "",
		"ы" => "i", 
		"ь" => "'", 
		"э" => "e", 
		"ю" => "yu", 
		"я" => "ya", 
		" " => " "
];
$text = strtr($let, $letter);
echo "$text \n";
}
translite('привет');

// Пятое задание

function change($string){
    $text = str_replace(' ', '_', $string);
    return $text;
}

change('а а а а');

// Шестое задание

$menuArr = [
    'Item 1',
    'Item 2' => ['Subitem 1', 'Subitem 2', 'Subitem 3'],
    'Item 3' => ['Subitem 4' => ['One level deeper 1', 'One level deeper 2']]
];

function menuRender($arr)
{

    $renderArr[] = '<ul>';
    foreach ($arr as $key => $value) {
        //перебираем массив, если значение - массив, то обрабатываем его нашей функцией
        if (is_array($value)) {
            $renderArr[] = '<li>' . $key . menuRender($value) . '</li>';
        } else {
            $renderArr[] = '<li>' . $value . '</li>';
        }
    }
    $renderArr[] = '</ul>';

    return implode($renderArr);
}

echo menuRender($menuArr);

// Седьмое задание

for ($i = 0; $i < 10; print $i++ . ' ');

// Восьмое задание


$arr = [
    'Московская область:' => ['Москва, Зеленоград, Клин'],
    'Ленинградская область:' => ['Санкт-Петербург, Всеволожск, Павловск, Кронштадт'],
    'Рязанская область:' => ['Касимов, Кораблино, Михайлов']
];

function city($letter, $array){
	
	foreach($array as $key => $city){
		
		for($i = 0; $i < $arrayLenght = count($array[$key]); $i++){
			$explodeArr = preg_split('//u', $array[$key][$i], 0, PREG_SPLIT_NO_EMPTY);
            
            if ($explodeArr[0] == $letter) {
                echo implode($explodeArr) . '<br>';
            }
	   }
	}
}

city('К',$arr);
