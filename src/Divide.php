<?php

namespace bsa1;


class Divide implements Operation
{
    public function evaluate($operands) : int
    {
        if(in_array(0, $operands) ) throw new \DivisionByZeroError("Division by Zero.");
        $res = $operands[0];
        for($i = 1;$i < count($operands);$i++) {
            $res /= $operands[$i];
        }
        return (float)$res;
    }
}