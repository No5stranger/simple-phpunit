<?php
class ExpectedTest extends PHPUnit_Framework_TestCase
{
    /**
     * @expectedException PHPUnit_Framework_Error
     */
    public function testFailInclude()
    {
        include 'not_existing_file.php';
    }
}
?>
