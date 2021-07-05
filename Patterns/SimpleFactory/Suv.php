<?php
namespace Patterns\SimpleFactory;

class Suv extends Car
{
    function getName(): String
    {
        return 'This is Suv!';
    }
}