<?php

namespace Uello\Txtello\Drivers;

use Uello\Txtello\Interfaces\DriverInterface;
use Uello\Txtello\Objects\Line;

abstract class Driver implements DriverInterface
{

    var $config = '';
    var $newEntityHeader = false;
    var $reader;
    var $data = [];
    var $itemIndex = 0;

    public function __construct($modification = false)
    {
        $this->loadConfig($modification);
    }

    protected function loadConfig($modification)
    {
         if (!is_array($this->config)) {
             $this->config = []; // carregar da pasta config, se tiver modificação
             // a ideia é usar o esquema de HERANÇA, ou seja, você primeiro da um load no V31
             // Ai você da um load no modification
             // Varre o modification e subistitui os indices, fazendo uma mescla dos 2, onde o 
             // v31 é a base, e a modificação altera a base
             // $this->config = loadfile($this->config.$modification.'.php');
         }
    }

    public function read($file) : array
    {
        $linesArray = explode("\r\n", $file);

        foreach ($linesArray as $lineContent) 
        {
            $line = new Line($this->config[$this->getHeader($lineContent)]);
            $line->setText($lineContent);
            $this->addItem($line->getData()); // $line->getData() isso aqui deve retorna a linha em array
        }

    }

    protected function addItem($data)
    {
        if ($this->newEntityHeader == $data['header'])
        {
            $this->index++;
        }
        $this->data['itens'][$this->index] = (array_merge($this->data['itens'][$this->index], $data));

    }

    public function getHeader($line)
    {
        return substr($line, 0, 3);
    }

    public function write()
    {

    }
    
}