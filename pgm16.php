<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyROiXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9Jv0RxT2MZZw1T" crossorigin="anonymous">

   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    body{
        background: purple;
    }
</style>
</head>
<body>
    <div class="container">
    <div class="row">
    <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-x1-4">
   
    </div>
    <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-x1-4">
    <form method="GET">
   <table class="table">
   <tr>
   <td>enter the initial value</td>
   <td><input type="number" class="form-control" name="initial" min="1" max="10"></td>
   </tr>
   <tr>
   <td>enter the final value</td>
   <td><input type="number" class="form-control" name="final" min="90" max="100"></td>
   </tr>
   <tr>
    <td></td>
    <td><button type="submit" class="btn btn-info" name="but">prime</button></td>
     </tr>
   </table>
   </form>
   </div>
   <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-x1-4">
   
   </div>
   </div>
   </div>
   </body>
   </html>

   <?php
   if(isset($_GET['but']))
   {
       $a=$_GET['initial'];
       $b=$_GET['final'];
     
       for($i=$a;$i<=$b;$i++)
       
       {
           $count=0;
           for($j=1;$j<=$i;$j++)
           {
       
       
           if(($i%$j)==0)
           {
            $count++;
                   
               }
               
          
       }

       if($count==2)
       {
           echo $i;
           echo"<br>";
       }
       
       }

      
    }
?>
