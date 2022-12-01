<?php

namespace Tests\Drivers\Ocorren;


use PHPUnit\Framework\TestCase;
use Uello\Txtello\Drivers\Ocorren\v50tivit;

class OcorrenV50tivitTest extends TestCase
{
    public function testItShouldReadFileSuccess()
    {
        $path = dirname(__FILE__, 3);
        $content = file_get_contents($path. '/files/Ocorren/OcorrenV50tivitTest.txt');
        $expected = json_decode(file_get_contents($path.'/files/Ocorren/OcorrenV50tivitTest.json'), true);
        $v31 = new v50tivit();
        $result = $v31->read($content);
        print_r($result->getData());die;
        file_put_contents("teste2.txt", json_encode($content));die;
        $this->assertEquals($expected, $result->getData());
    }
}