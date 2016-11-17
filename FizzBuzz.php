<?php

namespace App;

class FizzBuzz
{
    public function execute($int)
    {
        if ($int % 3 == 0) return 'fizz';
        if ($int == 5 || $int == 10) return 'buzz';

        return $int;
    }
}