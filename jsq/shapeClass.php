<?php
/**
 * Created by PhpStorm.
 * User: Jiryeza
 * Date: 2017/7/20
 * Time: 23:04
 */

abstract class Shape{
        public $shapeName;
        abstract function area();
        abstract function perimeter();

        protected function validate($value,$message='形状'){
            if ($value==""||!is_numeric($value)||$value<0){
                echo '<font color="red">'.$message.'必须为非负数,并且不能为空</font><br>';
                return false;
            }else{
                return true;
            }

        }
}
