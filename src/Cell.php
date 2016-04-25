<?php

class Cell
{
    private $state = 1;
    private $x;
    private $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function isDead()
    {
        return $this->state === 0;
    }

    public function isAlive()
    {
        return $this->state === 1;
    }

    public function setDead()
    {
        $this->state = 0;
    }

    public function setAlive()
    {
        $this->state = 1;
    }

    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @param mixed $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @param mixed $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }


}