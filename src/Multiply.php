<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 04.07.2016
 * Time: 16:55
 */

namespace bsa1;


class Multiply implements Operation
{
    public function evaluate($operands) : int
    {
        if(array_search($operands, [0])) return 0; 
        $res = 1;
        for ($i = 0;$i < count($operands);$i++)
            $res*= $operands[$i];
        return $res;
    }
}