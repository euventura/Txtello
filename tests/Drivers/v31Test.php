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

        $v31 = new v31();
        $result = $v31->read($content);
var_dump($result->getData());die;
        $expected = [
            'trailer' => [
                'sequency' => '999999999',
                'numberType2' => 1,
                'numberType3' => 2,
                'numberType4' => 1,
                'numberType5' => 1,
                'type' => 9,
            ],
            'mark' => []
        ];

        $this->assertEquals($expected, $result->getData());
    }

}