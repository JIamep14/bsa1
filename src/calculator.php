<?php declare(strict_types = 1);
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 04.07.2016
 * Time: 16:33
 */

namespace bsa1;
require_once __DIR__ .'/../vendor/autoload.php';

class calculator
{
    protected $operands = [];
    protected $operation;
    protected $logger;
    
    function __construct() {
        $this->operands = [0];
        $this->operation = new Add();

        $this->logger = new class {
            private $fp;
            function __construct()
            {
                $this->fp = fopen("log.txt", 'a');
            }

            public function logMsg(string $msg) : bool {
                if(fwrite($this->fp, $msg)) return true;
                return false;
            }

            function __destruct()
            {
                fclose($this->fp);
            }
        };
    }


    public function setOptions(Operation $op, int ...$operands) {
        $count = count($operands);
        if($count == 0) throw new \Exception("You did not write a single argument.");
        if($op instanceof Exponentiation) { if ($count != 1) throw new \Exception("This operation supports only one argument.");}
        else if($count < 2) throw new \Exception("This operation supports two or more arguments.");
        $this->operation = $op;
        $this->operands = $operands;
    }
    

    public function calculate() {
        $res = $this->operation->evaluate($this->operands);
        $this->logger->logMsg('['.date("l d F Y H:i:s").'] OPERATION: ' . basename(get_class($this->operation)). ' ARGUMENTS: ' .implode(" ", $this->operands)."  RESULT: ". $res ."\n");
        return $res;
    }
}