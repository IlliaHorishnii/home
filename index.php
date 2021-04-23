<?php
require_once "Channel.php";
require_once "Subscribing.php";
require_once "Sub.php";
require_once "SilverSub.php";
require_once "GoldSub.php";
require_once "PlatinumSub.php";

use Observer\Channel;
use Observer\Subscribing;
use Observer\Sub;
use Observer\SilverSub;
use Observer\GoldSub;
use Observer\PlatinumSub;

$channel = new Channel('Dude Perfect');

$allen = new Sub('Allen');
$allen->newSub($channel, $allen);

$jim = new SilverSub('Jim');
$jim->newSub($channel, $jim);

$alex = new GoldSub('Alex');
$alex->newSub($channel, $alex);

$linda = new PlatinumSub('Linda');
$linda->newSub($channel, $linda);

$channel->info();

$alex->deleteSub($channel, $alex);
$channel->info();
