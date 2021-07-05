<?php
/**
 * Created by PhpStorm.
 * User: ruslan
 * Date: 01.04.19
 * Time: 15:28
 */

namespace Patterns\SimpleFactory;
use Patterns\SimpleFactory\Pickup;
use Patterns\SimpleFactory\Suv;

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

class CarFactory
{
    /**
     * @param float $speed
     * @param float $cost
     * @return Suv
     */
    public static function makeSuv(float $speed, float $cost): Suv
    {
        return new Suv($speed, $cost);
    }

    /**
     * @param float $speed
     * @param float $cost
     * @return Pickup
     */
    public static function makePickup(float $speed, float $cost): Pickup
    {
        return new Pickup($speed, $cost);
    }

}


$car_1 = CarFactory::makePickup(150, 3500000);
var_dump($car_1->getName() . '|' . $car_1->getCost() . '|' . $car_1->getSpeed());

$car_2 = CarFactory::makeSuv(250, 5000000);
var_dump($car_2->getName() . '|' . $car_2->getCost() . '|' . $car_2->getSpeed());