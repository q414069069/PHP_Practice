<?php
/**
 * Created by PhpStorm.
 * User: Jiryeza
 * Date: 2017/7/20
 * Time: 21:04
 */

class Form{
    private $action;
    private $shape;


    function __construct($action=""){
        $this->action=$action;
        $this->shape=isset($_REQUEST["action"])? $_REQUEST['action'] : "rect";
    }

    function __toString(){
        $form='<form action="'.$this->action.'"method="post">';
        switch ($this->shape){
            case "rect":
                $form.=$this->getRect();
                break;
            case "triangelel":
                $form.=$this->getTriangelel();
                break;
            case "circle":
                $form.=$this->getCircle();
                break;
            default:
                $form.="请选择一个形状<br>";
        }
        $form.='<input type="submit" name="sub" value="计算">';
        $form.='</form>';
        return $form;
    }
    private function getRect(){
        $input='<b>请输入矩形的长和宽</b><br>';
        $input.='宽度:<input type="text" name="width" value="'.$_POST['width'].'"><br>';
        $input.='长度:<input type="text" name="length" value="'.$_POST['length'].'"><br>';
        $input.='<input type="hidden" name="action" value="rect">';
        return $input;

    }
    private function getTriangelel(){
        $input='<b>请输入三角形的三条边</b><br>';
        $input.='第一条:<input type="text" name="side1" value="'.$_POST['side1'].'"><br>';
        $input.='第二条:<input type="text" name="side2" value="'.$_POST['side2'].'"><br>';
        $input.='第三条:<input type="text" name="side3" value="'.$_POST['side3'].'"><br>';
        $input.='<input type="hidden" name="action" value="triangelel">';
        return $input;

    }
    private function getCircle(){
        $input='<b>请输入圆的半径</b><br>';
        $input.='半径:<input type="text" name="radius" value="'.$_POST['radius'].'"><br>';
        $input.='<input type="hidden" name="action" value="circle">';
        return $input;

    }
}