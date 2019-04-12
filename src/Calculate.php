<?php
/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 25/10/2018
 * Time: 00:02
 */
const ADDITION = '+';
const SUBTRACTION = '-';
const MULTIPLICATION = '*';
const DIVISION = '/';

class Calculate
{
    public $a;
    public $b;
    public $c;
    public $d;

    public function __construct()
    {

    }

    public function calculate($firstOperand, $secondOperand, $operator)
    {

        switch ($operator) {
            case ADDITION:
                return  $firstOperand + $secondOperand;
            case SUBTRACTION:
                return  $firstOperand - $secondOperand;
            case MULTIPLICATION:
                return  $firstOperand * $secondOperand;
            case DIVISION:
                if ($secondOperand != 0) {
                    return  $firstOperand / $secondOperand;
                } else {
                    echo("Can not divide by 0");
                    break;
                }
            default:
                echo ("Unsupported operation");
        }
    }

    public function assertEquals($a, $b)
    {
        return $a + $b;
    }
}