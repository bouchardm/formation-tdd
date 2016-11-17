<?php

namespace App;

use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    public function __construct()
    {
        $this->fb = new FizzBuzz();
        parent::__construct();
    }

    public function testQuandJePasse1AlorsJeRecois1()
    {
        // Given
        $fb = new FizzBuzz();

        // When
        $result = $fb->execute(1);

        // Then
        $this->assertEquals(1, $result);
    }
}