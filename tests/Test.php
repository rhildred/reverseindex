<?php

require dirname(__DIR__) . '/src/ReverseIndex.php';
class reverseindexTest extends PHPUnit_Framework_TestCase
{
    // Individual tests go here
    public function testTrue()
    {
        $this->assertEquals(true, true);
    }
    public function testConstruct()
    {
        $oReverse = new \ReverseIndex\ReverseIndex();
        $this->assertTrue($oReverse != null);
    }
    public function testCreateIndex()
    {
        $oReverse = new \ReverseIndex\ReverseIndex();
        $oReverse->createIndex(".", "md");
    }
}