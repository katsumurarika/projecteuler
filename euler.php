<?php

    public function doProject1($num1, $num2)
    {
        $rslt = 0;

        for ($i = 1; $i < 1000; $i++) {
            if ($i % $num1 == 0 || $i % $num2 == 0) {
                $rslt += $i;
            }
        }
        return $rslt;
    }

    public function doProject2($limit)
    {
        $rslt = 0;

        $prev1 = 0;
        $prev2 = 1;

        for ($i = 1; $i < $limit; $i++) {

            if ($rslt > 4000000) { break; }

            $now    = $prev1 + $prev2;
            $prev1  = $prev2;
            $prev2  = $now;

            if ($now % 2 == 0) {
                $rslt += $now;
            }
        }
        return $rslt;
    }

    public function doProject3($target)
    {
        $rslt  = 0;

        for ($i = 1; $i < 10000; $i++) {
            if ($target % $i == 0) { $rslt = $i; }
        }
        return $rslt;
    }

    public function doProject4()
    {
        $rslt  = 0;
        $max   = 0;

        for ($i = 100; $i <= 999; $i++) {
            for ($j = 100; $j <= 999; $j++) {
                $prd = $i * $j;
                if ($prd == strrev($prd) && $max < $prd) {
                    $rslt = $prd;
                    $max  = $prd;
                }
            }
        }
        return $rslt;
    }

    public function doProject5()
    {
        $rslt  = 0;
        return $rslt;
    }

    public function doProject6()
    {
        $rslt  = 0;
        return $rslt;
    }

    public function doProject14()
    {
        $rslt  = 0;
        return $rslt;
    }

    public function doProject15()
    {
        $rslt  = 0;
        $cld   = 1;
        $mtr   = 1;

        for ($i = 40; $i > 0; $i--) {
            $cld *= $i;
        }
        for ($j = 20; $j > 0; $j--) {
            $mtr *= $j;
        }
        $rslt = $cld / ($mtr * $mtr);

        return $rslt;
    }
