<?php

namespace Uello\Txtello;

use Uello\Txtello\Drivers\v31;
use Uello\Txtello\Interfaces\DriverInterface;

class Txtello
{
    /**
     * Driver
     *
     * @var DriverInterface
     */
    private $driver;

    public function __construct(String $driver, Array $modifer = [])
    {
        $this->driver = $this->buildDriver($driver, $modifer);
    }

    /**
     * Read TextData and transform in ArrayData
     *
     * @param String $data
     * @return void
     */
    public function read(String $data)
    {
        return $this->driver->read($data);
    }
    
    /**
     * Read ArrayData and transform in TextData
     *
     * @param String $data
     * @return void
     */
    public function write($data)
    {
        return $this->driver->read($data);
    }

    /**
     * Find a Driver from string
     *
     * @param String $driver
     * @param Array $modifier
     * @return void
     */
    private function buildDriver(String $driver, Array $modifier)
    {
        $config = include dirname(__FILE__) . '/Configs/Drivers.php';
        $infos = explode('-', $driver);
        $driver = $config[$infos[0]][$infos[1]];
        if (!empty($modifier)) {
            $driver->setModification($modifier);
        }
        return $driver;
    }

}