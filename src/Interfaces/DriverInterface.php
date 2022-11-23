<?php

namespace Uello\Txtello\Interfaces;

interface DriverInterface
{

    public function read($textData) : self;
    public function write($data): self;

}