<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 04.07.2016
 * Time: 16:44
 */

namespace bsa1;


interface Operation
{
    public function evaluate($operands);
}