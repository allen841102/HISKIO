<?php

class Solution
{
    function climbStairs_DynamicProgramming($n)
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