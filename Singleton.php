<?php
class Singleton
{
    private static
        $instance = null;

    public static function getInstance()
    {
        if (null === self::$instance)
        {
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function test()
    {
        var_dump($this);
    }
}

$Object = Singleton::getInstance();
$Object -> test();
Singleton::getInstance() -> test();