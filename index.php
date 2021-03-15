<?php

function factory(...$funcs)
{
    $noname = function ($funcs) {
        $funcs();
    };
    for ($i = 0; $i < count($funcs); $i++) {
        $noname($funcs[$i]);
    }
}
function first() {
    echo 1 . '<br>';
}
function second() {
    echo 2 . '<br><br><br>';
}
factory('first', 'second');

///////////////////////////////////////// 2 часть
$arr = [
    'array' => [
        1,
        'test',
        [
            2,
            'x' => 3,
            [
                4,
                5,
              'k' =>  [
                    'z'=> 6,
                    7,
                ],
                8
            ]
        ],
    ],
    45 => 'second_text',
    'man' => 'русский',
    [
        3,
        'русский',
        5
    ],
];

function putCsv(array $arr) {                    //  Запись csv файла
    $csv_write = fopen('new.csv', 'w');

    function getArray($arr_in) {              // Проверка многоуровневых массивов
        static $arr_in2;
        foreach($arr_in as $key => $value) {

            if (is_array($value)) {
                unset($arr_in[$key]);
                $arr_in = array_merge($arr_in, $value);
                getArray($arr_in);

                return $arr_in2;
            }
        }
        foreach($arr_in as $key => $value) {       // Смена кодировки русских строк
            if (is_string($value)) {
                $arr_in[$key] = mb_convert_encoding($value, 'cp1251', 'utf-8');

            }
        }
        $arr_in2 = $arr_in;
        return $arr_in;
    }

    foreach($arr as $key => $value) {

        if(!is_array($value)) {
            $arr[$key] = [$value];
            $value = $arr[$key];
        }
        fputcsv($csv_write, getArray($value), ';');
    }

    fclose($csv_write);
}

///////////////////////////////////////////////////   - Чтение csv файла

function getCsv(){
    $csv = fopen('new.csv', 'r');
    $row = 0;
    while(($csv_read = fgetcsv($csv, 0)) !== false) {
       $row++;
       $num = count($csv_read);
       echo $row.' строка: ';
       for($i = 0; $i < $num; $i++) {
           echo mb_convert_encoding($csv_read[$i], 'utf-8', 'cp1251'). ' ';
       }
       echo '<br>';
   }
   fclose($csv);
}
putCsv($arr);
getCsv();

