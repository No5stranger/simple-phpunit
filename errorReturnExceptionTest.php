<?php
class ErrorSuppressionTest extends PHPUnit_Framework_TestCase
{
    public function testFileWriting()
    {
        $writer = new FileWriter();
        $this->assertFalse(@$writer->write('/is_not_writable/file', 'stuff'));
    }
}

class FileWriter
{
    public function write($file, $content)
    {
        $file = fopen($file, 'w');
        if ($file == false) {
            return false;
        }
    }
}
?>
