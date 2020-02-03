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
          if(isset($_POST['submit']))
          {
              $user=$_POST['username'];
               $pass=$_POST['password'];
               $Sql="select password from text_db where username='$user'";
               $res=mysqli_query($conn,$Sql);
               if(mysqli_num_rows($res))
               {
                   $x=mysqli_fetch_assoc($res);
                  if($x['password']===$pass)
                    {
                   echo "success logged";
               }}
else
   {
    header("Location:frm42.php");
          }
               }
          }
         

        ?>
    </body>
</html>
