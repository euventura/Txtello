<?php

namespace Tests\Drivers;


use PHPUnit\Framework\TestCase;
use Uello\Txtello\Drivers\Notfis\v31;

class V31Test extends TestCase
{
   
 // @todo: Criar todos os testes.
 // teste que teste sucesso e falha.
// algum teste que teste todas as validações de forma sucesso e falha

    public function testItShouldReadFileSuccess()
    {
        $content = file_get_contents(__DIR__ .'/../files/Notfis-v31.txt');
        $expected = json_decode(file_get_contents(__DIR__ .'/../files/Notifis-v31-expected.json'), true);
        $v31 = new v31();
        $result = $v31->read($content);
        $this->assertEquals($expected, $result->getData());
    }
}