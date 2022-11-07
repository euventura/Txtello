<?php

namespace Uello\Txtello\Objects;

use Uello\Txtello\Interfaces\DriverInterface;

class Line 
{
    private $config;
    private $text;
    private $data;

    public function __construct($config)
    {
        $this->config = $config;
    }

    /**
     * Get the value of config
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Get the value of textData
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set the value of textData
     */
    public function setText($textData): self
    {
        $this->textData = $textData;
        // @TODO: make data. Aqui voce tem o $this->config e o $textData. Precisa transformar para Array
        return $this;
    }

    /**
     * Get the value of data
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set the value of data
     */
    public function setData($data): self
    {
        $this->data = $data;
        // @TODO: make data. Aqui voce tem o $this->config e o $data. Precisa transformar para linha
        return $this;
    }
}