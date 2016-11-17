<?php

namespace App;

class FizzBuzz
{
    public function execute($int)
    {
        if ($int % 15 == 0) return 'fizzbuzz';
        if ($int % 3 == 0) return 'fizz';
        if ($int % 5 == 0) return 'buzz';

        return $int;
    }

    public function executeUpTo($int)
    {
        return array_map(function ($item) {
            return $this->execute($item);
        }, range(1, $int));
    }
}