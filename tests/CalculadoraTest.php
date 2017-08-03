<?php
use PHPUnit\Framework\TestCase;
require 'src/utils/Calculadora.php';
class CalculadoraTest extends TestCase{
    private $calc;
    public function setUp(){
        $this->calc = new Calculadora();
    }

    public function numeros(){
        return [
          [2,3,5],
          [2,3,5],
          [2,3,5],
          [2,3,5],
          [2,3,5]
        ];
    }

    public function nombres(){
        return [
            ['cristhian',true],
            ['andres..',true],
            ['',false],
            [2,false]
        ];
    }

    /**
     * @dataProvider numeros
     *
     * @param $x
     * @param $y
     * @param $result
     */

    public function testSuma($x,$y,$result){
        $this->assertEquals($result,$this->calc->sumar($x,$y));
    }

    public function testResta(){
        $this->assertEquals(1,$this->calc->restar(3,2));
    }

    /**
     * @dataProvider nombres
     *
     * @param $nombre
     * @param $result
     */
    public function testNombre($nombre,$result){
        $this->assertEquals($result,$this->calc->validarNombre($nombre));
    }
}
?>