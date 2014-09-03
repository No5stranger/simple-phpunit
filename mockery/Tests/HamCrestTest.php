<?php
namespace MockeryTest\Tests;

use PHPUnit_Framework_TestCase;

class HamCrestTest extends PHPUnit_Framework_TestCase
{
    public function testHamcrestMatchers()
    {
        $name = 'cjp';
        $age = 22;
        $habbies = ['coding', 'football', 'reading'];

        assertThat($name, is('cjp'));
        assertThat($name, not('cxp'));
        assertThat($age, is(greaterThan(20)));

        assertThat($age, is(integerValue()));

        assertThat($habbies, haskey('coding'));
    }
}
