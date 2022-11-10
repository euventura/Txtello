<?php

namespace Uello\Txtello\Drivers;

use Uello\Txtello\Interfaces\DriverInterface;
use Uello\Txtello\Objects\Line;

abstract class Driver implements DriverInterface
{

    private $configFile;
    private $config;
    private $configFolder = './src/Configs/';
    private $data = [];
    private $textData;
    private $multipleTag = [];

    public function __construct($modification = false)
    {
        $this->loadConfig();
    }

    public function setModification(array $modificationArray)
    {
        foreach($modificationArray as $header => $modificationLine)
        {
            $this->config[$header] = $modificationLine;
        }
    }

    public function loadConfig()
    {
        $this->config = include $this->configFolder . $this->configFile;
    }

    public function read($file) : self
    {
        $this->textData = $file;
        $this->index = 0;
        $linesArray = explode("\r\n", $file);

        foreach ($linesArray as $lineContent) 
        {
            $line = new Line($this->config[$this->getHeader($lineContent)]);
            $line->setText($lineContent);
            $this->addItem($line->getData());
        }
        $this->multipleTag = [];
        return $this;
    }

    public function getData()
    {
        return $this->data;
    }

    public function getText()
    {
        return $this->textData;
    }

    protected function addItem($data)
    {
        $headerIndex = $data['header'];

        /**
         * A ideia aqui é a seguinte:
         * o array externo ficará:
         * [000] => array
         * [313][0] => array
         * [313][1]
         * [313][2]
         */
        if (isset($this->data[$headerIndex])) {

            if(in_array($this->data[$headerIndex], $this->multipleTag)){
                $this->data[$headerIndex][] = $this->data[$headerIndex];
                return;
            }

            $this->data[$headerIndex] = [$this->data[$headerIndex]];
            $this->multipleTag[] = $headerIndex;
            return;
        }


        $this->data[$headerIndex] = $data;
    }

    public function getHeader($line)
    {
        return substr($line, 0, 3);
    }

    public function write($data) : self
    {
        $this->textData = '';
        
        foreach ($data as $arrayIndex => $lineData) 
        {
            $header = explode('.', $arrayIndex)[0];
            $line = new Line($this->config[$header]);
            $line->setData($lineData);
            $this->textData .= $line->getText();
        }

        return $this;
    }
    
}