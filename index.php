<?php
declare(strict_types = 1);
namespace bsa1;
require_once __DIR__ .'/vendor/autoload.php';
try
{
    $obj = new calculator();

//    $obj->setOptions(new Add());
//    $obj->setOptions(new Add(),'a');
//    $obj->setOptions(new Add(), 1);
//    $obj->setOptions(new Add(), 1, 2);
//    $obj->setOptions(new Add(), 1.4, 2);
//    $obj->setOptions(new Add(), 1, 3, 4);
//    $obj->setOptions(new Divide(), 1, 3, 4);
//    $obj->setOptions(new Divide(), 6, 3);
//    $obj->setOptions(new Divide(), 'a');
//    $obj->setOptions(new Divide());
//    $obj->setOptions(new Exponentiation(), 'a');
//    $obj->setOptions(new Exponentiation(), 1, 3);
    $obj->setOptions(new Exponentiation(), 16);

    echo $obj->calculate();


}
catch (\TypeError $tex) {

    echo $tex->getMessage();

}

catch(\Exception $ex) {
    echo $ex->getMessage();
}
?>