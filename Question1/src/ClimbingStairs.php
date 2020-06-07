<?php

namespace App;

class ClimbingStairs
{
    public function climbStairs_Recursive($number)
    {
        if ($number <= 1) {
            return 1;
        }
        return $this->climbStairs_Recursive($number - 1) + $this->climbStairs_Recursive($number - 2);
    }

    public function climbStairs_DynamicProgramming($n)
    {
        if ($n <= 1) {
            return 1;
        }
        $value[0] = 1;
        $value[1] = 1;
        for ($i = 2; $i <= $n; $i++) {
            $value[$i] = $value[$i - 1] + $value[$i - 2];
        }
        return $value[$n];
    }
}