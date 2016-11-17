<?php

namespace App;

use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    private $fb;

    public function __construct()
    {
        $this->fb = new FizzBuzz();
    }

    public function testQuandJePasse1AlorsJeRecois1()
    {
        $result = $this->fb->execute(1);

        $this->assertEquals(1, $result);
    }

    public function testQuandJePasse2AlorsJeRecois2()
    {
        $result = $this->fb->execute(2);

        $this->assertEquals(2, $result);
    }
}