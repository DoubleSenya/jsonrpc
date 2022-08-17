<?php

class MyDateTime 
{

    public function isEven($number)
    {
        if ($number % 2 == 0) 
        {
            return true;
        }
        
        return false;
    }

    public function sum($a, $b, $c)
    {
        return $a + $b + $c;
    }
}