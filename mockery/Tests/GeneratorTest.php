<?php
namespace MockeryTest\Tests;

use PHPUnit_Framework_TestCase;
use Mockery;
use MockeryTest\Model\Generator;
use MockeryTest\Model\myFile;

class GeneratorTest extends PHPUnit_Framework_TestCase
{
    protected $mockedFile;

    public function setUp()
    {
        $this->mockedFile = Mockery::mock('myFile');
    }

    public function testDoesNotOverWriteFile()
    {
        $this->mockedFile->shouldReceive('exists')
            ->once()
            ->andReturn(true);
        $this->mockedFile->shouldReceive('put')
            ->never();
        $generator = new Generator($this->mockedFile);
        $generator->fire();
    }

    public function tearDown()
    {
        Mockery::close();
    }
}
