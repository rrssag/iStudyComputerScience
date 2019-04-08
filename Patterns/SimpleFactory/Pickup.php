<?php
namespace Patterns\SimpleFactory;

class Pickup extends Car
{
    function getName(): String
    {
        return 'This is PickUp!';
    }
}