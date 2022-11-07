<?php

namespace Uello\Txtello;

use Uello\Txtello\Drivers\v31;

class Txtello
{
    private $driver;
    private $stopOnError;

    public function __construct($driver, $modifer, $stopOnError = false)
    {
        // separar Notifis, de ocorren, de conemb.
        $this->driver = $this->buildDriver($driver, $modifer);
        $this->stopOnError = $stopOnError;
    }

    public function read($data)
    {
        return $this->driver->read($data);
    }
    
    public function write()
    {
        
    }

    private function buildDriver($driver, $modifer)
    {
        // Transformar o texto no driver correto.
        // aqui falta um parametro, o modificador.
        // v31, e preciso saber qual dos v31..
        return $driver;
    }

}