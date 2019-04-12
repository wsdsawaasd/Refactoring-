<?php
/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 24/10/2018
 * Time: 23:43
 */

require __DIR__ . "/../src/Calculate.php";


class CalculateTest extends Calculate
{
    public function testCalculateAdd()
    {
        $a = 1;
        $b = 1;
        $o = '+';

        $expected = 2;

        $calculator = new Calculate();
        $result = $calculator->calculate($a, $b, $o);
        $this->assertEquals($expected, $result);
    }
}