<?php
declare(strict_types = 1);
namespace bsa1;
require_once __DIR__ .'/vendor/autoload.php';
try
{
    $obj = new calculator();

//    $obj->setOptions(new Add()); // exception
//    $obj->setOptions(new Add(),'a'); // exception
//    $obj->setOptions(new Add(), 1); // exception
//    $obj->setOptions(new Add(), 1, 2); // 3
//    $obj->setOptions(new Add(), 1.4, 2); // exception
//    $obj->setOptions(new Add(), 1, 3, 4); // 8
//    $obj->setOptions(new Multiply(), 0, 3, 4); // 0
//    $obj->setOptions(new Multiply(), 1, 3, 4); // 12
//    $obj->setOptions(new Divide(), 1, 3, 4); // 0
//    $obj->setOptions(new Divide(), 6, 3); // 2
//    $obj->setOptions(new Divide(), 'a'); // exception
//    $obj->setOptions(new Divide(), 1, 0, 1); // exception
//    $obj->setOptions(new Divide()); // exception
//    $obj->setOptions(new Exponentiation(), 'a'); // exception
//    $obj->setOptions(new Exponentiation(), 1, 3); // exception
    $obj->setOptions(new Exponentiation(), 16); // 65536

    echo $obj->calculate();


}
catch (\TypeError $tex) {

    echo $tex->getMessage();

}

catch (\DivisionByZeroError $dz) {
    echo $dz->getMessage();
}

catch(\Exception $ex) {
    echo $ex->getMessage();
}
?>