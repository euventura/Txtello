<?php

namespace Uello\Txtello\Drivers;

use Uello\Txtello\Interfaces\DriverInterface;
use Uello\Txtello\Objects\Line;

abstract class Driver implements DriverInterface
{

    protected $config;
    protected $configFile;
    protected $configFolder = './src/Configs/';
    protected $data = [];
    protected $textData;
    protected $multipleTag = [];
    protected $errors = [];

    public function __construct()
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

        foreach ($linesArray as $positionLine => $lineContent) 
        {
            $header = $this->getHeader($lineContent);

            if (!isset($this->config[$header])) {
                continue;
            }
            
            $line = new Line($this->config[$this->getHeader($lineContent)]);
            $line->setText($lineContent);

            if (!empty($line->getErrors())) {
                $this->errors[$positionLine] = $line->getErrors();
            }
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
        $headerIndex = $data['identifier'];
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