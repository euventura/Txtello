<?php

namespace Uello\Txtello\Objects;

class Line 
{
    private $config;
    private $text;
    private $data;
    private $errorBag;

    // @todo: precisa arrumar uma forma de deixar os erros disponiveis.
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

    private function transformTextInData()
    {
        //@todo: precisa adicionar a validação aqui também.
        // o validador que precisa saber limpar o dado, assim como ele sabe  'sujar' o dado.
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

    public function getErrors()
    {
        return $this->errorBag;
    }
}