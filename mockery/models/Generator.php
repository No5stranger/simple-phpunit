<?php
namespace MockeryTest\Model;

use MockeryTest\Model\myFile;

class Generator
{
    protected $file;

    public function __construct($file = null)
    {
        $this->file = $file ?: new myFile;
    }

    public function getContent()
    {
        return 'foo bar';
    }

    public function fire()
    {
        $afile = 'foo.txt';

        if (!$this->file->exists($afile)) {
            $this->file->put($afile, $this->getContent());
        }
    }
}
