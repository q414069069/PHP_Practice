<?php
/**
 * Created by PhpStorm.
 * User: Jiryeza
 * Date: 2017/7/15
 * Time: 21:48
 */
header("Content-type:text/html;charset=GB2312");
foreach ($_SERVER as $KEY => $value){
    echo '$_SERVER['.$KEY.']='.$value.'<br>';

    echo '<pre>';
    print_r($_SERVER);
    echo '</pre>';

    echo $_SERVER['REMOTE_ADDR'];
}