<?php
/**
 * Created by PhpStorm.
 * User: Jiryeza
 * Date: 2017/7/20
 * Time: 23:20
 */

class Rect extends Shape {
    private $width=0;
    private $length=0;

    function __construct(){
        $this->shapeName='矩形';
        if ($this->validate($_POST['width'],'矩形的宽')& $this->validate($_POST['length'],'矩形的长')){
            $this->width=$_POST['width'];
            $this->length=$_POST['length'];
        }else{
            exit;
        }
    }

    function area(){
        return $this->width*$this->length;

    }
    function perimeter(){
        return ($this->width+ $this->length)*2;
    }
}