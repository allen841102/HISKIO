<?php

namespace App;

class Product implements \SplSubject
{
    private $observers;

    public function __construct()
    {
        $this->observers = new \SplObjectStorage;
    }

    /**
     * @inheritDoc
     */
    public function attach(\SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    /**
     * @inheritDoc
     */
    public function detach(\SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    /**
     * @inheritDoc
     */
    public function notify()
    {
        echo nl2br("上架通知\n");
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function publish()
    {
        //Logic of publish
        $this->notify();

    }

}