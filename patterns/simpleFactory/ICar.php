<?php
namespace Patterns\simpleFactory;

interface ICar
{
    public function getSpeed(): float;
    public function getCost(): float;
}