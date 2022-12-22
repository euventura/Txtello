<?php

namespace Uello\Txtello\Drivers;

use App\Errors\ErrorBag;
use Uello\Txtello\Interfaces\DriverInterface;
use Uello\Txtello\Objects\Line;

abstract class Driver implements DriverInterface
{

    /**
     * Readed Config File
     */
    protected $config;
    /**
     * Relative Path File Config
     */
    protected $configFile;

    /**
     * Relative Path File Config folder
     */
    protected $configFolder = '/src/Configs/';

    /**
     * ArrayData
     */
    protected $data = [];

    /**
     * TextData
     */
    protected $textData;

    /**
     * Errors
     */
    protected $errors = [];

    protected $errorBag;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->loadConfig();
    }

    /**
     * Set a different part of map Modification
     *
     * @param array $modificationArray
     * @return void
     */
    public function setModification(array $modificationArray)
    {
        foreach($modificationArray as $header => $modificationLine)
        {
            $this->config[$header] = $modificationLine;
        }
    }

    /**
     * Load config from file
     *
     * @return void
     */
    public function loadConfig()
    {
        $this->config = include (dirname(__FILE__, 3)) . $this->configFolder . $this->configFile;
    }

    /**
     * Read a TextData
     *
     * @param String $fileContent
     * @return self
     */
    public function read(String $fileContent) : self
    {
        $this->textData = $fileContent;
        $this->index = 0;
        $linesArray = explode("\r\n", $fileContent);
        $errorBag = new ErrorBag();

        foreach ($linesArray as $positionLine => $lineContent) 
        {
            $header = $this->getHeader($lineContent);

            if (!isset($this->config[$header])) {
                continue;
            }
            
            $line = new Line($this->config[$this->getHeader($lineContent)], $positionLine, $errorBag);
            $errorBag = $line->getErrors();
            $line->setText($lineContent);            
            $this->addItem($line->getData());
        }
        $this->errorBag = $errorBag;
        return $this;
    }

    /**
     * get ArrayData
     *
     * @return void
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Return a TextData
     *
     * @return void
     */
    public function getText()
    {
        return $this->textData;
    }

    /**
     * Add item to ArrayData
     *
     * @param Array $data
     * @return void
     */
    protected function addItem(Array $data)
    {
        $headerIndex = $data['identifier'];
    
        if (isset($this->data[$headerIndex])) {

            if (!isset($this->data[$headerIndex][0])) {
                $first = $this->data[$headerIndex];
                $this->data[$headerIndex] = [];
                $this->data[$headerIndex][] = $first;
                $this->data[$headerIndex][] = $data;
                return;
            }

            $this->data[$headerIndex][] = $this->data[$headerIndex];
            return;
        }
        $this->data[$headerIndex] = $data;
    }

    /**
     * Read Header fom a TextLine
     *
     * @param String $line
     * @return void
     */
    public function getHeader(String $line)
    {
        return substr($line, 0, 3);
    }

    /**
     * Read ArrayData and transform in TextData
     *
     * @param Array $data
     * @return self
     */
    public function write(Array $data) : self
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