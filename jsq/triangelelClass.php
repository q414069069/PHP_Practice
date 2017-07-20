<?php
/**
 * Created by PhpStorm.
 * User: Jiryeza
 * Date: 2017/7/20
 * Time: 23:21
 */

class Triangelel extends Shape {
    private $side1;
    private $side2;
    private $side3;

    function  __construct(){
        $this->shapeName="三角形";
        if ($this->validate($_POST['side1'],'第一条边')&$this->validate($_POST['side2'],'第2条边')&$this->validate($_POST['side3'],'第3条边')){
            $this->side1=$_POST['side1'];
            $this->side2=$_POST['side2'];
            $this->side3=$_POST['side3'];
        }
        if (!$this->validateSum()){
            echo '<font color="red">两边之和必须大于第三边</font><br>';
            exit;
        }
    }
    function area(){
        $p=($this->side3+$this->side2+$this->side1)/2;
        return sqrt($p*($p-$this->side1)*($p-$this->side2)*($p-$this->side3));
    }
    function perimeter(){
        return $this->side1+$this->side2+$this->side3;
    }
    private function validateSum(){
        $condition1=($this->side1+$this->side3)>$this->side2;
        $condition2=($this->side1+$this->side2)>$this->side3;
        $condition3=($this->side2+$this->side3)>$this->side1;

        if ($condition1&&$condition2&&$condition3){
            return true;
        }else{

            return false;
        }
    }

}