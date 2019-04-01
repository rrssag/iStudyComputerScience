<?php
namespace Patterns\simpleFactory;

class Pickup extends Car
{
    function getName(): String
    {
        return 'This is PickUp!';
    }
}