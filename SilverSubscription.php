<?php
namespace Strategy;

class SilverSubscription extends Subscription
{
    private string $subType = 'silver';
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
}
