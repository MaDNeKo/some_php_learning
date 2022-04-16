<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tree;

class GenerateImageController extends Controller
{
    private $tree = new Tree();
    private mathArray = ['-', '+', '%', '/', '*', 'xy2'];
    private trigonometryArray = ['sin', 'cos', 'exp', 'acos', 'asin', 'sqrt', 'tan', 'atan'];


    private function mathOperator($x, $y, $func)
    {
        switch ($func) 
        {
            case '-':
                return $x-$y;
            case '+':
                return $x+$y;
            case '%':
                return $x%$y;
            case '/':
                return $x/$y;
            case '*':
                return $x*$y;
            case 'xy2':
                return pow($x,2) + pow($y,2);
            case 'sinx':
                return sin(deg2rad($x));
            case 'cosx':
                return cos(deg2rad($x));
            case 'expx':
                return exp($x);
            case 'acosx':
                return acos(deg2rad($x));
            case 'asinx':
                return asin(deg2rad($x));
            case 'sqrtx':
                return sqrt($x);
            case 'tanx':
                return tan(deg2rad($x));
            case 'atanx':
                return atan(deg2rad($x));
            case 'siny':
                    return sin(deg2rad($y));
            case 'cosy':
                    return cos(deg2rad($y));
            case 'expy':
                    return exp($y);
            case 'acosy':
                    return acos(deg2rad($y));
            case 'asiny':
                    return asin(deg2rad($y));
            case 'sqrty':
                    return sqrt($y);
            case 'tany':
                    return tan(deg2rad($y));
            case 'atany':
                    return atan(deg2rad($y));
            default:
                return false;
        }
    }
    public function imageGenerator(int $red, int $green, int $blue) 
    {
        //some shit
    }


}
