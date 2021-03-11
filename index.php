<?php
$array = [
    1,
    6,       //2
    15,
    'text',    //2
    44,
    -3.23,   //2
    1,
    [
        2,  //2
        5,
        -1, //2
        3,
    ],
    2, //2
    4,
    6, //2
];
for($i = 1; $i < count($array); $i+=2) {
    if (is_string($array[$i])) continue;
    if (is_array($array[$i])) {
        for($j = 0; $j < count($array[$i]); $j+=2) {
            if (is_string($array[$i][$j])) continue;
            $sum += $array[$i][$j];
        }
        if(count($array[$i]) % 2 == 0) $i--;
    }
    else $sum += $array[$i];
}
echo 'Сумма всех вторых элементов = '. $sum . '<br>'.'<br>';
/////////////////////////////////////////////////////////////
$string = ' z а вS F S - 5 я я s 6q 2/';
$string = str_replace(' ', '', $string);
$string = strtolower($string);
$length = mb_strlen($string);

for($i = 0; $length > 0; $i++) {
    $count = 0;
    $substr = mb_substr($string, 0, 1);          //Получаю первый символ в строке
    for($j = 0; $j < $length; $j++) {
        if($substr == mb_substr($string, $j, 1))  {      //Проверяю символ на совпадения включая самого себя
            $string = str_replace($substr , '', $string); // Удаляю символ и все его совпадения
            $count = $length - mb_strlen($string);                    //Количество удаленных символов
            $length = mb_strlen($string);
        }
    }
    echo $substr . ' = ' . $count . '<br>';
}