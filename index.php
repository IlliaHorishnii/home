<?php
$array = [
    1,
    [
        6,
        15,          //2
        'text',
        44,
    ],
    -3.23,
    1,
    [
        2,
        5,           //2
        [
            7,
            'text',  //2
        ],
        -1,
        3,
    ],
    2,
    [
        4,
        6,           //2
        [
            6,
            3,       //2
            1,
            [
                1,
                8,     //2
                [
                    3,
                    2,    //2
                    1,
                ],
            ],
        ],
        6,
    ],
];
$array2 = [];
$index = 0;
for($i = 0; $i < count($array); $i++) {
    if(is_string($array[1])) continue;
    if(!is_array($array[1])) $sum += $array[1];
    if(is_array($array[$i])) {
       $array2[$index] = $array[$i];
       $index++;
    }
}
for($i = 0; $i < count($array2); $i++) {
    for($j = 0; $j < count($array2[$i]); $j++) {
        if (is_array($array2[$i][$j]))  {
            array_push($array2, $array2[$i][$j]);
        }
    }
    if(is_string($array2[$i][1])) continue;
    $sum += $array2[$i][1];

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