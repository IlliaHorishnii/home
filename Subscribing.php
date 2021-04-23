<?php
namespace Observer;

class Subscribing implements \SplObserver
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function update(\SplSubject $subject)
    {
        echo $this->name.' <b>'.$subject->getContent().'</b><br>';
    }
}


