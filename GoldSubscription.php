<?php
namespace Strategy;

class GoldSubscription extends Subscription
{
    private string $subType = 'gold';
    private string $name;

    public function __construct($name)
    {
        $this->name = $name;
        echo $this->subscribe()."<br />";
    }

    public function subscribe(): string
    {
        return $this->name." has bought a ".$this->subType." subscription";
    }

    public function unsubscribe(): string
    {
        return $this->name." has canceled a ".$this->subType." subscription";
    }

    public function getSubType(): string
    {
        return "You have got a ".$this->subType. " subscription";
    }

    public function photoLoader($link)
    {
        $obj = new Context();
        $obj->photoLoader($link);
        return 'Success!';
    }

    public function onlineCall($friendName)
    {
        $obj = new Context();
        $key = $obj->onlineCall($friendName);
        return "key of the call is: ".$key;
    }
}
