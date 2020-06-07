<?php

use App\ClimbingStairs;
use PHPUnit\Framework\TestCase;

class Q1Test extends TestCase
{
    public function testClimbing()
    {
        $climbingStairs = new ClimbingStairs();
        $actual = $climbingStairs->climbStairs_DynamicProgramming(1);
        $this->assertEquals(1, $actual);
        //
        $actual = $climbingStairs->climbStairs_DynamicProgramming(20);
        $this->assertEquals(10946, $actual);
    }
}