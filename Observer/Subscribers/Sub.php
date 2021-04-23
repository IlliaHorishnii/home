<?php

require_once "../Channel.php";
require_once "../Subscribing.php";

use Observer\Channel;

$newspaper = new Channel('Dude Perfect');

$allen = new Subscribing('Allen');
$jim = new Subscribing('Jim');
$linda = new Subscribing('Linda');
//add reader
$newspaper->attach($allen);
$newspaper->attach($jim);
$newspaper->attach($linda);

//remove reader
$newspaper->detach($linda);


$newspaper->info();

//class Sub
//{
//    public function NewSub()
//    {
//        echo 5;
//    }
//}
