<?php
namespace Facade;

class MyApi
{

    public static function connection($word, $mode)
    {
        switch ($mode) {
            case "i":
                $string = "<i>".$word."</i>";
                break;
            case "b":
                $string = "<b>".$word."</b>";
                break;
            case "s":
                $string = "<s>".$word."</s>";
                break;
            default:
                $string = 'Error';
        }
        return $string;
    }
}
