<?php
namespace Observer;

class Channel implements \SplSubject
{
    private $name;
    private $observers = [];
    private $content;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function attach(\SplObserver $observer)
    {
        $this->observers[] = $observer;
    }

    public function detach(\SplObserver $observer)
    {

        $key = array_search($observer, $this->observers, true);
        if (false != $key) {
            unset($this->observers[$key]);
        }
    }

    public function info()
    {
        $this->content = ' received a new video from';
        $this->notify();
    }

    public function getContent()
    {
        return $this->content." {$this->name} channel ";
    }

    public function notify()
    {
        foreach ($this->observers as $value) {
            $value->update($this);
        }
    }
}
