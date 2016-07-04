<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 04.07.2016
 * Time: 18:05
 */

namespace bsa1;


class Exponentiation implements Operation
{
    function evaluate($operands)
    {
        return pow(2, $operands[0]);
    }
}