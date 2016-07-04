<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 04.07.2016
 * Time: 16:55
 */

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