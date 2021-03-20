<?php

abstract class animals
{
 abstract function info_a(string $type, int $age):string;

}

class predators extends animals
{
    function info_a(string $type, int $age):string
    {
        return '<br>Тип: Хищник<br>' . 'Вид: ' . $type . '<br>Возраст: ' . $age . '<br>';
    }
}

class herbivores extends animals
{
    function info_a(string $type, int $age):string
    {
        return '<br>Тип: Травоядное<br>' . 'Вид: ' . $type . '<br>Возраст: ' . $age . '<br>';
    }
}

abstract class vehicles
{
    abstract function info_v(string $mark, string $model):string;
}

class boats extends vehicles
{
    function info_v(string $mark, string $model):string
    {
        return '<br>Тип: Катер<br>' . 'Марка: ' . $mark . '<br>Модель: ' . $model . '<br>';
    }
}

class cars extends vehicles
{
    function info_v(string $mark, string $model):string
    {
        return '<br>Тип: Легковое авто<br>' . 'Марка: ' . $mark . '<br>Модель: ' . $model . '<br>';
    }
}

class trucks extends vehicles
{
    function info_v(string $mark, string $model):string
    {
        return '<br>Тип: Грузовик<br>' . 'Марка: ' . $mark . '<br>Модель: ' . $model . '<br>';
    }
}

class helper_array
{
   static function Array($array) {
       $num = 1;
    foreach($array as $key => $value) {

            echo 'Ключ ' . $num . ' элемента: ' . $key . '<br>Содержание ' . $num . ' элемента: ' . $value . '<br>';
            $num++;
    }

 }
}

class helper_string
{
    static function String($string) {
        echo '<h1>'.$string.'</h1><br>';
    }
}

$obj_A_1 = new predators();
var_export($obj_A_1->info_a('Гепард', 10));

$obj_A_2 = new herbivores();
var_export($obj_A_2->info_a('Бобик', 3));

$obj_V_1 = new boats();
var_export($obj_V_1->info_v('Admiral', 'Vetta'));

$obj_V_2 = new cars();
var_export($obj_V_2->info_v('Mazda', 'CX-5'));

$obj_V_3 = new trucks();
var_export($obj_V_3->info_v('ГАЗель', 'NEXT'));

helper_string::String('Тест строки');

$array = [
  5 => 'first',
    [
        2,
        'key' => 1,
        [
            'string',
            4 => 1
            ]
    ],
    'word' => 8,
];
helper_array::Array($array);