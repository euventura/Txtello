<?php

namespace Uello\Txtello\Drivers;


use Uello\Txtello\Interfaces\DriverInterface;
use Uello\Txtello\Objects\Line;

class Driver implements DriverInterface
{


    protected $config;

    protected $configFile;

    protected $configFolder = '/src/Configs/';

    protected $data;

    protected $textData;

    protected $errors = [];

    protected $index;

    /**
     * Constructor
     */
    public function __construct($config)
    {
        $this->loadConfig($config);
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
    public function loadConfig($config)
    {
        $this->config = include (dirname(__FILE__, 3)) . $this->configFolder . $config . '.php';
    }

    /**
     * Read a TextData
     *
     * @param string $fileContent
     * @return self
     */
    public function read(String $fileContent) : self
    {
        $this->textData = $fileContent;
        $this->index = 0;
        $linesArray = explode("\r\n", $fileContent);

        foreach ($linesArray as $positionLine => $lineContent) 
        {
            $header = $this->getHeader($lineContent);

            if (!isset($this->config[$header])) {
                continue;
            }
            
            $line = new Line($this->config[$this->getHeader($lineContent)], $positionLine, $header);
            $line->setText($lineContent);
            $this->addError($line->getErrors());       
            $this->addItem($line->getData());
        }

        return $this;
    }

    protected function addError($errors)
    {
        if (!empty($errors)) {
            print_r($errors); die;
        }
        foreach ($errors as $error) {
            $this->errors[] = $error->toArray();
        }
    }

   
    /**
     * get ArrayData
     *
     * @return array|null
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Return a TextData
     *
     * @return string|null
     */
    public function getText()
    {
        return $this->textData;
    }

    /**
     * Add item to ArrayData
     *
     * @param array $data
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

            $this->data[$headerIndex][] = $data;
            return;
        }
        $this->data[$headerIndex] = $data;
    }

    /**
     * Read Header fom a TextLine
     *
     * @param string $line
     * @return string|null
     */
    public function getHeader(string $line)
    {
        return substr($line, 0, 3);
    }

    /**
     * Read arrayData and transform in TextData
     *
     * @param array $data
     * @return self
     */
    public function write(array $data) : self
    {
        $this->textData = '';
        foreach ($data as $arrayIndex => $lineData) 
        {
            $header = explode('.', $arrayIndex)[0];
            $line = new Line($this->config[$header], $arrayIndex, $lineData['header']);
            $line->setData($lineData);
            $this->addError($line->getErrors());
            $this->textData .= $line->getText();
        }

        return $this;
    }

    /**
     * return array os errros
     *
     * @return array
     */
    public function getErrors()
    {
        return $this->errors;
    }
    
}