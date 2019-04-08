<?php
namespace Patterns\SimpleFactory;

interface ICar
{
    public function getSpeed(): float;
    public function getCost(): float;
}