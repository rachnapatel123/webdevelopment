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
        
if(isset($_POST['submit']))
{
    $img=$_FILES['image'];

    echo "File name".$img['name']."<br>";
      echo "File size".$img['size']."<br>";
        echo "Temp Dir".$img['tmp_name']."<br>";
          echo "File Type".$img['type']."<br>";
         move_uploaded_file($img['tmp_name'],"img/".$img['name']);
         
}
        ?>
    </body>
</html>
