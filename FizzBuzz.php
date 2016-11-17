<?php

namespace App;

class FizzBuzz
{
    public function execute($int)
    {
        $output = '';
        if ($int % 3 == 0) $output .= 'fizz';
        if ($int % 5 == 0) $output .= 'buzz';

        if ($output) return $output;
        
        return $int;
    }
}