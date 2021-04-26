<?php
 require_once('Context.php');
 require_once('Subscription.php');
 require_once('DefaultSubscription.php');
 require_once('SilverSubscription.php');
 require_once('GoldSubscription.php');

 use Strategy\Context;
 use Strategy\Subscription;
 use Strategy\DefaultSubscription;
 use Strategy\SilverSubscription;
 use Strategy\GoldSubscription;

$obj = new DefaultSubscription('Gabe');
PHP_EOL;
echo $obj->getSubType()."<br>";

$obj = new SilverSubscription('Yuri');
PHP_EOL;
echo $obj->photoLoader('http://somelink.com')."<br>";

$obj = new GoldSubscription('Van');
PHP_EOL;
echo $obj->onlineCall("Gabe")."<br>";
