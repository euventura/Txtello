<?php

namespace Uello\Txtello\Objects;

use Uello\Txtello\Errors\ValidationError;

class Line 
{
    /**
     * full config map
     *
     * @var array
     */
    protected $config;

    /**
     * Text data
     *
     * @var string
     */
    protected $text;

    /**
     * Array data
     *
     * @var array
     */
    protected $data;

    protected $errors = [];

    protected $line;
    /**
     * text data
     * 
     * @var string
     */
    protected $textData;

    protected $header;

    /**
     * Construct
     *
     * @param array $config
     */
    public function __construct($config, int $line, $header)
    {
        $this->config = $config;
        $this->line = $line;
        $this->header = $header;
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
    protected function transformTextInData()
    {
        $pointer = 0;
        foreach ($this->config['map'] as $position => $map) {
            $rawFieldValue = substr($this->textData, ($position-1) + $pointer, $map['size']);
            $pointer += $map['size'] -1;
            $validations = array_filter(explode('|', $map['format']));

            if (empty($validations)) {
                $validations = ['validation'];
            }
 
            foreach ($validations as $validation) {
                $infos = (explode(':', $validation));
                $infos[1] = $infos[1] ?? false;
                $className = 'Uello\\Txtello\\Validations\\'. ucfirst($infos[0]);
                $validator = new $className($infos[1]);
                $rawFieldValue = $validator->clear($rawFieldValue);

                if (!$validator->validate($rawFieldValue))
                {
                    print_r($rawFieldValue . '_');
                    $error = new ValidationError();
                    $error->setMessage($validator->getError($className));
                    $error->setLine($this->line);
                    $error->setPosition($position);
                    $error->setFieldName($map['name']);
                    $error->setFieldValue($rawFieldValue);
                    $error->setLineText($this->textData);
                    $error->setConfig($map);
                    $error->setHeader($this->header);
                    $this->errors[] = $error->toArray();
                }
            }
            $this->data[$map['name']] = $rawFieldValue;
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
    protected function transformDataInText()
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
                    $error = new ValidationError();
                    $error->setMessage($validator->getError());
                    $error->setLine($this->line);
                    $error->setFieldName($map['name']);
                    $error->setFieldValue($value);
                    $error->setLineText($this->textData);
                    $error->setConfig($map);
                    $error->setHeader('');
                    $this->errors[] = $error;
                }

                if ($index == 0) {
                    $this->text .= $validator->fill($value, $map['size']);
                }

            }
        }
        
    }

    /**
     * return all errors
     *
     * @return array
     */
    public function getErrors()
    {
        return $this->errors;
    }
}