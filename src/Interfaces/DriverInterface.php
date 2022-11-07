<?php

namespace Uello\Txtello\Interfaces;

interface DriverInterface
{

    public function read($data) : self;
    public function write(): self;

}