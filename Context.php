<?php
namespace Strategy;

class Context
{

    public function photoLoader($link)
    {
        try {
            $image = file_get_contents($link);
            file_put_contents(dirname(__FILE__)."\logo.png", $image);

            if (false == $image) {
                throw new \Exception("file not found.");
            }
        } catch (\Exception $e) {
            echo $e->getMessage();
            die();
        }
    }

    public function onlineCall($friendName)
    {
        echo "calling to ".$friendName."...<br>";
        return md5(time());
    }
}
