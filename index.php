<?php
require_once "Channel.php";
require_once "Subscribing.php";
require_once "Subscriber.php";
require_once "SilverSubscriber.php";
require_once "GoldSubscriber.php";
require_once "PlatinumSubscriber.php";

use Observer\Channel;
use Observer\Subscribing;
use Observer\Subscriber;
use Observer\SilverSubscriber;
use Observer\GoldSubscriber;
use Observer\PlatinumSubscriber;

$channel = new Channel('Dude Perfect');

$allen = new Subscriber('Allen');
$allen->newSub($channel, $allen);

$jim = new SilverSubscriber('Jim');
$jim->newSub($channel, $jim);

$alex = new GoldSubscriber('Alex');
$alex->newSub($channel, $alex);

$linda = new PlatinumSubscriber('Linda');
$linda->newSub($channel, $linda);

$alex->deleteSub($channel, $alex);
$channel->info();


