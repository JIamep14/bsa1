<?php

namespace bsa1;


class Divide implements Operation
{
    public function evaluate($operands) : int
    {
        $res = $operands[0];
        for($i = 1;$i < count($operands);$i++) {
            $res /= $operands[$i];
        }
        return $res;
    }
}