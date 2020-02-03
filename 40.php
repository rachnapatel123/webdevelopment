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
        
      $dbservername="localhost";
      $dbuser="root";
      $dbpassword="";
      $dbname="rachna_db";
      $conn=mysqli_connect($dbservername,$dbuser,$dbpassword,$dbname);
       
      if($conn)
     {
         $q="delete from text_db where id=1";
         $res=mysqli_query($conn,$q);
         if($res)
         {
             echo "successfully done ";
             
         }
     }
     else
     {
         echo"no";
     }
        ?>
    </body>
</html>
