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
       
        {
            $q="delete * form text_db where id=2or id=3";
            $res=mysqli_query($conn,$q);
            if($res)
            {
                $q="update text_db set
                username='rachna' where id=1 update";
            }
        $res=mysqli_query($conn,$sql);
                   if($res)
                   {
                       echo "successfully data";
                   }
            }
        ?>
    </body>
</html>
