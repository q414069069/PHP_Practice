<html>
    <head>
        <title>图形计算</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    </head>

    <body>
        <center>
            <h1>图形计算器</h1>

            <a href="index.php?action=rect">矩形</a>
            <a href="index.php?action=triangelel">三角形</a>
            <a href="index.php?action=circle">圆形</a>
        </center>
    <?php
    error_reporting(E_ALL & ~E_NOTICE);//设置错误报告级别
    //自动加载需要的类文件
            function __autoload($className){
                include strtolower($className)."Class.php";
            }
            echo new form();

            if (isset($_POST['sub'])){
                echo new Result();
            }
    ?>
    </body>
</html>