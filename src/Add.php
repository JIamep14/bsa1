<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 04.07.2016
 * Time: 16:54
 */

namespace bsa1;


class Add implements Operation
{
    public function evaluate($operands) : float
    {
        $res = 0;
        foreach ($operands as $num) {
            $res += $num;
        }
        return $res;
    }
}