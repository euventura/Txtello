<?php

namespace Uello\Txtello\Interfaces;

interface DriverInterface
{

    public function read(String $textData) : self;
    public function write(Array $data): self;

}