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
        $dbname="";
        $conn=mysqli_connect($dbservername,$dbuser,$dbpassword,$dbname);
        if($conn)
        {
            echo "yes we did it";
        }
            else
            {
                echo "something went wrong";
            }
        
        // put your code here
        ?>
    </body>
</html>
