<?php

namespace App;

class FizzBuzz
{
    public function execute($int)
    {
        if ($int % 3 == 0) return 'fizz';

        return $int;
    }
}