<?php

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