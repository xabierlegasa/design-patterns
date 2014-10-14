<?php

class Cache
{
    private static $cacheInstance;

    /**
     * @var int
     */
    private $counter;

    private function __construct()
    {
        $this->counter = 0;
    }

    public static function getCacheInstance()
    {
        if (self::$cacheInstance === null) {
            self::$cacheInstance = new Cache();
        }

        return self::$cacheInstance;
    }

    public function increaseCounter($i)
    {
        $this->counter = $this->counter + $i;
    }

    public function getCounter()
    {
        return $this->counter;
    }
}
