<?php
class ExceptionTest extends PHPUnit_Framework_TestCase
{
    public function testException()
    {
        $this->setExpectedException('InvalidArgumentException');
    }

    public function testExceptionHasRightmessage()
    {
        $this->setExpectedException(
            'InvalidArgumentException', 'Right Message'
        );
        throw new InvalidArgumentException('Some Message', 10);
    }

    public function testExceptionMessageMatchesRegExp()
    {
        $this->setExpectedException(
            'InvalidArgumentException', '/Right.*/', 10
        );
        throw new InvalidArgumentException('The Wrong Message', 10);
    }

    public function testExceptionHasRightCode()
    {
        $this->setExpectedException(
            'InvalidArgumentException', 'Right Message', 20
        );
        throw new InvalidArgumentException('The Right Message', 10);
    }
}
?>
