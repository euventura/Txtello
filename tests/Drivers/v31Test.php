<?php

namespace Tests\Drivers;


use PHPUnit\Framework\TestCase;
use Uello\Txtello\Drivers\v31;

class AfdReaderTest extends TestCase
{
   

    public function testItShouldReadFileSuccess()
    {
        $content = file_get_contents('../files/v31.txt');

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

    public function testItShouldReadOnlyTheChunkSize()
    {
        $afdReader = new AfdReader(__DIR__ . '/../files/afd_test.txt', AfdReader::AFD, 0, 1);

        $expected = [
            'header' => [
                'sequency' => '000000000',
                'type' => 1,
                'identityType' => 'CNPJ',
                'identityNumber' => '17484689000170',
                'cei' => '000000000000',
                'name' => 'Devs Nerds',
                'SerialNumber' => '00000000000000001',
                'registryStartDate' => '01012016',
                'registryEndDate' => '13042016',
                'generationDate' => '13042016',
                'generationTime' => ['hour' => 11, 'minute' => 37],
            ],
            'mark' => []
        ];

        $this->assertEquals($expected, $afdReader->getAll());
    }

}