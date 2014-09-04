<?php
namespace Phpunit\Model;

class Cover
{
    public function tryBalance($balance)
    {
        if ($balance > 0) {
            return $balance;
        } else {
            throw RunTimeException("Oh my god!");
        }
    }

    public function getMoney($age)
    {
        if ($age > 10) {
            return $age;
        } else {
            throw Exception("You are too old");
        }
    }
}
