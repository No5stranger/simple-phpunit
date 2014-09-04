<?php
namespace Phpunit\Tests;

use PHPUnit_Framework_TestCase;
use Phpunit\Model\Cover;

class CoverTest extends PHPUnit_Framework_TestCase
{
    protected $cover;
    public function setUp()
    {
        $this->cover = new Cover();
    }

    public function balanceProvider()
    {
        return array(
            array(2222)
        );
    }

    /**
     * @covers  Cover::tryBalance
     * @dataProvider balanceProvider
     */
    public function testTryBalance($balance)
    {
        assertThat($balance, sameInstance($this->cover->tryBalance($balance)));
    }

    public function ageProvider()
    {
        return array(
            array(18),
            //array(20)
        );
    }

    /*
     * @covers Cover::getMoney
     */
    public function testGetMoney()
    {
        $age = 18;
        try {
            assertThat($age, sameInstance($this->cover->getMoney($age)));
        } catch (Exception $e) {
            assertThat($e, euqalTo("You are too old"));
        }
    }

    /**
     * @coversNothing
     */
    public function testNoting()
    {
        echo "I just stay here, I test nothing";
    }
}
