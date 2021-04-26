<?php
namespace Strategy;

abstract class Subscription
{
    abstract public function subscribe(): string;

    abstract public function unsubscribe(): string;

    abstract public function getSubType();
}
