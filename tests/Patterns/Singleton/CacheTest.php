<?php

class CacheTest extends \PHPUnit_Framework_TestCase
{
    function test_cache_insteance_is_the_same_always()
    {
        $cache = Cache::getCacheInstance();
        $cache->increaseCounter(5);

        $this->assertEquals(5, $cache->getCounter());

        // check cache instance is the one we had
        $cache2 = Cache::getCacheInstance();
        $this->assertEquals(5, $cache2->getCounter());
    }
}
