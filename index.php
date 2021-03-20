<?php

abstract class animals
{
 abstract public function infoAnimals(string $type, int $age):string;

}

class predators extends animals
{
    public function infoAnimals(string $type, int $age):string
    {
        return '<br>Тип: Хищник<br>' . 'Вид: ' . $type . '<br>Возраст: ' . $age . '<br>';
    }
}

class herbivores extends animals
{
    public function infoAnimals(string $type, int $age):string
    {
        return '<br>Тип: Травоядное<br>' . 'Вид: ' . $type . '<br>Возраст: ' . $age . '<br>';
    }
}

abstract class vehicles
{
     abstract public function infoVehicles(string $mark, string $model):string;
}

class boats extends vehicles
{
    public function infoVehicles(string $mark, string $model):string
    {
        return '<br>Тип: Катер<br>' . 'Марка: ' . $mark . '<br>Модель: ' . $model . '<br>';
    }
}

class cars extends vehicles
{
    public function infoVehicles(string $mark, string $model):string
    {
        return '<br>Тип: Легковое авто<br>' . 'Марка: ' . $mark . '<br>Модель: ' . $model . '<br>';
    }
}

class trucks extends vehicles
{
    public function infoVehicles(string $mark, string $model):string
    {
        return '<br>Тип: Грузовик<br>' . 'Марка: ' . $mark . '<br>Модель: ' . $model . '<br>';
    }
}

class helperArray
{
   public static function ArrayInfo($array) {
       $num = 1;
    foreach($array as $key => $value) {

            echo 'Ключ ' . $num . ' элемента: ' . $key . '<br>Содержание ' . $num . ' элемента: ' . $value . '<br>';
            $num++;
    }

 }
}

class helperString
{
    public static function TextChanger($string) {
        echo '<h1>'.$string.'</h1><br>';
    }
}

$obj_A_1 = new predators();
var_export($obj_A_1->infoAnimals('Гепард', 10));

$obj_A_2 = new herbivores();
var_export($obj_A_2->infoAnimals('Бобик', 3));

$obj_V_1 = new boats();
var_export($obj_V_1->infoVehicles('Admiral', 'Vetta'));

$obj_V_2 = new cars();
var_export($obj_V_2->infoVehicles('Mazda', 'CX-5'));

$obj_V_3 = new trucks();
var_export($obj_V_3->infoVehicles('ГАЗель', 'NEXT'));

helperString::TextChanger('Тест строки');

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
helperArray::ArrayInfo($array);