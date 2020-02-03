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
      $q="select * from text_db";
           $res=mysqli_query($conn,$q);
           if(mysqli_num_rows($res)>0)
           {
               $x=mysqli_fetch_assoc($res);
               echo  $x['username'].'has joining on'.$x['date'];
               echo"<br>";
               echo $x['password'];
                }
        }
        // put your code here
        ?>
    </body>
</html>
