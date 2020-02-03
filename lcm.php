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
     $a=10;
     $b=12;
     $l=1;
     echo"$a";
      echo"$b";
      for($x=2;$a>1||$b>1;$x++){
   while($a%$x==0||$b%$x==0)
     {
         if($a%$x==0)
         {
             $a=$a/$x;
         }
         if($b%$x==0)
         {
         $b=$b/$x;
         }
         
        $l=$l*$x;
     }
      echo"$l";
        ?>
    </body>
</html>
