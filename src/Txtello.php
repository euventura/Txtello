<?php

namespace Uello\Txtello;

use Uello\Txtello\Drivers\v31;

class Txtello
{
    private $driver;

    public function __construct($driver, $modifer = false)
    {
        $this->driver = $this->buildDriver($driver, $modifer);
    }

    public function read($data)
    {
        return $this->driver->read($data);
    }
    
    public function write($data)
    {
        return $this->driver->read($data);
    }

    private function buildDriver($driver, $modifier)
    {
        $config = include './Configs/Drivers.php';
        $infos = explode($driver, '-');
        $driver = $config[$infos[0]][$infos[1]];
        $driver->setModifier($modifier);
        return $driver;
    }

}