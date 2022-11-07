<?php

namespace Tests\Drivers;


use PHPUnit\Framework\TestCase;
use Uello\Txtello\Drivers\v31;

class V31Test extends TestCase
{
   

    public function testItShouldReadFileSuccess()
    {
        $content = file_get_contents(__DIR__ .'/../files/Notfis-v31.txt');

        $v31 = new v31();
        $result = $v31->read($content);

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