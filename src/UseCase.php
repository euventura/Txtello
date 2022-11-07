<?php
namespace Uello\Txtello;

use Uello\Txtello\Txtello;

class test 
{

    public function __construct()
    {
        $parser = new Txtello('v31');
        $data = $parser->read("");
        return $data;
    }

}

$a = new test();

