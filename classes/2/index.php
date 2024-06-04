<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once './Test.php';
        require_once './Test2.php';
        
        $obj = new Test();
        
        echo $obj->x;
        echo $obj->name;
        $obj->add();
        
        echo '<br>';
        echo Test2::$x2;
        echo Test2::$name2;
        echo Test2::add2();
        ?>
    </body>
</html>
