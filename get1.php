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
        if(isset($_POST['login']))
       {
            $username=ruchu;
            $password=12345;
            if($username==$_POST['username']&&$password==$_POST['password'])
            
                {
                  header("location:wellcom.php");
            }else{
                    header("location:frm.php");
                }
            }
            else
            {
                echo header("location:frm.php");
            }
        
        // put your code here
        ?>
    </body>
</html>
