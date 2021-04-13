<?php

use PHPUnit\Framework\TestCase;
use Tasks\TaskOne;

final class TaskOneTest extends TestCase
{
    public function testRepeat(): void
    {
        $taskOne = new TaskOne();

        $this->assertSame([1, 2, 3, 1, 2, 3, 1, 2, 3], $taskOne->repeat([1, 2, 3]));
    }
}