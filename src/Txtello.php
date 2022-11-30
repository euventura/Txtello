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

    // @todo: configuirar todos os drivers, criando o map a partir de documentos.
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
        $config = include dirname(__FILE__) . '/Configs/Drivers.php';
        $infos = explode('-', $driver);
        $driver = $config[$infos[0]][$infos[1]];
        if ($modifier) {
            $driver->setModification($modifier);
        }
        return $driver;
    }

}