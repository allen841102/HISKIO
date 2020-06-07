<?php

class Solution
{
    function climbStairs_Recursive($number)
    {
        if ($number <= 1) {
            return 1;
        }
        return $this->climbStairs($number - 1) + $this->climbStairs($number - 2);
    }
}