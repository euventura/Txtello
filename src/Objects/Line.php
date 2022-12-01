<?php

namespace Uello\Txtello\Objects;

class Line 
{
    /**
     * full config map
     *
     * @var Array
     */
    private $config;

    /**
     * Text data
     *
     * @var String
     */
    private $text;

    /**
     * Array data
     *
     * @var Array
     */
    private $data;

    /**
     * ErrorBag
     *
     * @var [type]
     */
    private $errorBag;

    /**
     * Construct
     *
     * @param Array $config
     */
    public function __construct($config)
    {
        $this->config = $config;
        $this->errorBag = new ErrorBag();
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
        $this->transformTextInData();
        return $this;
    }

    /**
     * Trasnform TextData in ArrayData
     *
     * @return void
     */
    private function transformTextInData()
    {
        $pointer = 0;
        foreach ($this->config['map'] as $position => $map) {
            $this->data[$map['name']] = trim(substr($this->textData, ($position-1) + $pointer, $map['size']));
            $pointer += $map['size'];
        }
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
        $this->transformDataInText();

        return $this;
    }

    /**
     * Transform ArrayData in TextData
     *
     * @return void
     */
    private function transformDataInText()
    {
        $this->text = '';
        foreach ($this->config as $position => $map) {
            $validations = explode('|', $map['validation']);
            $value = $this->data[$map['name']];
            foreach ($validations as $index => $validation) {
                $infos = explode(':', $validation);
                $infos[1] = $infos[1] ?? false;
                $validator = new $infos[0]($infos[1]);
                if (!$validator->validate($value))
                {
                    $this->errorBag->addError($validator->getError(),$map['name']);
                }

                if ($index == 0) {
                    $this->text .= $validator->fill($value, $map['size']);
                }

            }
        }
        
    }

    /**
     * return all errrors
     *
     * @return void
     */
    public function getErrors()
    {
        return $this->errorBag;
    }
}