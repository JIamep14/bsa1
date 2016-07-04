<?php

namespace bsa1;


class Add implements Operation
{
    public function evaluate($operands) : int
    {
        $res = 0;
        foreach ($operands as $num) {
            $res += $num;
        }
        return $res;
    }
}