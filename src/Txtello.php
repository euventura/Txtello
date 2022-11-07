<?php

namespace Uello\Txtello;

class Txtello
{
    private $driver;
    private $stopOnError;

    public function __construct($driver, $stopOnError = false)
    {
        $this->driver = $this->buildDriver($driver);
        $this->stopOnError = $stopOnError;
    }

    public function read($data)
    {
        return $this->driver->read($data);
    }
    
    public function write()
    {
        
    }

    private function buildDriver($driver)
    {
        return $driver;
    }

}