<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
     $x=30;
     $y=20;
    function hello()
    {
        global $x,$y;
        $y=$x+$y;
       }
    echo hello();
    echo $y;
        ?>
    </body>
</html>
