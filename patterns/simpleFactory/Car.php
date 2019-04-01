<?php
/**
 * Created by PhpStorm.
 * User: ruslan
 * Date: 01.04.19
 * Time: 15:23
 */

namespace Patterns\simpleFactory;


abstract class Car implements Icar
{
    private $speed;
    private $cost;

    /**
     * @param float $speed
     * @param float $cost
     */
    public function __construct(float $speed, float $cost)
    {
        $this->speed = $speed;
        $this->cost = $cost;
    }


    public function getSpeed():float
    {
        return $this->speed;
    }

    public function getCost(): float
    {
        return $this->cost;
    }

    abstract function getName(): String;
}