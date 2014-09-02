<?php
class DataTest extends PHPUnit_Framework_TestCase
{
    public function addtionProvider()
    {
        return array(
            array(0, 0, 0),
            array(0, 1, 1),
            array(1, 0, 1),
            array(1, 1, 2),
        );
    }

    /**
     * @dataProvider addtionProvider
     */
    public function testAdd($a, $b, $expected)
    {
        $this->assertEquals($expected, $a + $b);
    }
}
