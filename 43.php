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
       
              $user= mysqli_real_escape_string($conn,$user);
               $q="select * from text_db where username='$user'";
         $res=mysqli_query($conn,$q);
         $x=mysqli_fetch_assoc($res);
               echo $x['id'];
     }}
     
        ?>
          <form action="" method="POST">
            <input type="text" id="user" placeholder="enter name" name="username">
      
         
            <input type="submit" name="submit" value="submit" ></form>
    </body>
</html>
