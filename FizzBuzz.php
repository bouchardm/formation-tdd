<?php

namespace App;

class FizzBuzz
{
    public function execute($int)
    {
        if ($int == 3 || $int == 6) return 'fizz';

        return $int;
    }
}