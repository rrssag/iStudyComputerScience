<?php
namespace Patterns;

class Singleton
{
    private static $instances = [];

    private function __construct()
    {
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    public function __wakeup()
    {
        throw new \Exception("Ooops");
    }


    /**
     * @return Singleton
     */
    public static function getInstance()
    {
        $cls = static::class;
        echo $cls.PHP_EOL;
        if (!isset(self::$instances[$cls])) {
            self::$instances[$cls] = new static;
        }

        return self::$instances[$cls];
    }

    public function getName()
    {
        return static::class;
    }
}

$test = Singleton::getInstance();

var_dump($test->getName());