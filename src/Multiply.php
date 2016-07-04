<?php

namespace bsa1;


class Multiply implements Operation
{
    public function evaluate($operands) : int
    {
        if(in_array(0, $operands)) return 0;
        $res = 1;
        for ($i = 0;$i < count($operands);$i++)
            $res*= $operands[$i];
        return $res;
    }
}