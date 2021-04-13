<?php

use PHPUnit\Framework\TestCase;
use Tasks\TaskTwo;

class TaskTwoTest extends TestCase
{
    public function testReformat(): void
    {
        $taskTwo = new TaskTwo();

        $this->assertSame("Lmshrp dvlpr tst", $taskTwo->reformat("liMeSHArp DeveLoper TEST"));
    }
}