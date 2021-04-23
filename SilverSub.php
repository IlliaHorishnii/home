<?php
namespace Observer;

class SilverSub extends Subscribing
{
    private $type = 'silver';

    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function newSub($channel, $sub)
    {
        $channel->attach($sub);
        echo 'a '.$this->type.' user has subscribed the channel <br>';
    }
    public function deleteSub($channel, $sub)
    {
        $channel->detach($sub);
        echo 'a '.$this->type.' user has unsubscribed the channel <br>';
    }
}
