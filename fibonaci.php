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
        $x=0;
        $a=0;
        $b=1;
        $s=9;
        echo "$a ";
        echo "$b ";
        for($i=0;$i<=9-2;$i++)
        {
          $c=$a+$b;
          echo"$c ";
          $a=$b;
          $b=$c;
          

        }
        ?>
    </body>
</html>
