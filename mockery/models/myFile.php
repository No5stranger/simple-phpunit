<?php
namespace MockeryTest\Model;

class myFile
{
    public function put($path, $content)
    {
        return file_put_contents($path, $content);
    }

    public function exists($path)
    {
        return file_exists($path);
    }
}
