<?php
namespace Strategy;

class DefaultSubscription extends Subscription
{
    private string $subType = 'default';
    private string $name;

    public function __construct($name)
    {
        $this->name = $name;
        echo $this->subscribe() . "<br />";
    }

    public function subscribe(): string
    {
        return $this->name . " has bought a " . $this->subType . " subscription";
    }

    public function unsubscribe(): string
    {
        return $this->name . " has canceled a " . $this->subType . " subscription";
    }

    public function getSubType(): string
    {
        return "You have got a " .$this->subType. " subscription";
    }
}
