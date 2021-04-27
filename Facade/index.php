<?php
require_once("Facade.php");
require_once("MyApi.php");

use Facade\Facade;

$obj = new Facade();
echo $obj->apiResult('word', 'b');
