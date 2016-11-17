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
        $output = [];
        foreach (range(1, $int) as $item) {
            $output[] = $this->execute($item);
        }
        return $output;
    }
}