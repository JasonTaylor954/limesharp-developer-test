<?php

use PHPUnit\Framework\TestCase;
use Tasks\TaskThree;

class TaskThreeTest extends TestCase
{
    public function testNextBinaryNumber(): void
    {
        $taskTwo = new TaskThree();

        $this->assertSame([1, 1], $taskTwo->next_binary_number([1, 0]));
        $this->assertSame([1, 0, 0], $taskTwo->next_binary_number([1, 1]));
        $this->assertSame([1, 1, 1], $taskTwo->next_binary_number([1, 1, 0]));
        $this->assertSame([1, 0, 0, 0, 0, 0, 0, 0, 1, 0], $taskTwo->next_binary_number([1, 0, 0, 0, 0, 0, 0, 0, 0, 1]));
    }
}