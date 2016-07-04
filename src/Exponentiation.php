<?php

namespace bsa1;


class Exponentiation implements Operation
{
    function evaluate($operands)
    {
        return pow(2, $operands[0]);
    }
}