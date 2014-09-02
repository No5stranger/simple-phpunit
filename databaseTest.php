<?php
class Database extends PHPUnit_Framework_TestCase
{
    protected static $dbh;

    public function setUpBeforeClass()
    {
        self::$dbh = new PDO('sqlite:memory');
    }

    public function testSomething()
    {
        //Here can do something testing
    }

    public function tearDownAfterClass()
    {
        self::$dbh = null;
    }
}
?>
