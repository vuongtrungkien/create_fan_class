<?php
define('SLOW', 1);
define("MEDIUM", 2);
define("FAST", 3);

class Fan
{
    private $speed;
    public $on;
    private $radius;
    public $color;

    public function __construct()
    {
        $this->speed = SLOW;
        $this->on = false;
        $this->radius = 5;
        $this->color = "blue";
    }


    public function getColor()
    {
        return $this->color;
    }

    public function getRadius()
    {
        return $this->radius;
    }


    public function getSpeed()
    {
        return $this->speed;
    }


    public function isOn()
    {
        return $this->on;
    }


    public function setColor(string $color)
    {
        $this->color = $color;
    }


    public function setOn(bool $on)
    {
        $this->on = $on;
    }


    public function setRadius(int $radius)
    {
        $this->radius = $radius;
    }


    public function setSpeed(int $speed)
    {
        $this->speed = $speed;
    }

    function toString() {
        if($this->isOn()) {
            return " speed " . $this->getSpeed(). ", color " .$this->getColor().", fan radius " .$this->getRadius().", fan is on";
        }
        return " speed " . $this->getSpeed(). ", color " .$this->getColor().", fan radius " .$this->getRadius().", fan is off";
    }

}