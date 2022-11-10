<?php
namespace Uello\Txtello;

use Uello\Txtello\Txtello;

class test 
{

    public function __construct()
    {
        $parser = new Txtello('notifis-v31');
        $data = $parser->read("");
        $data = $parser->write([]);
        $data->getText();
        return $data->getData();
    }

}

$a = new test();

