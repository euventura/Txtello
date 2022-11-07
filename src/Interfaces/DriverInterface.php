<?php

namespace Uello\Txtello\Interfaces;

interface DriverInterface
{

    public function read($data) : array;
    public function write();

}