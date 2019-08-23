<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyROiXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9Jv0RxT2MZZw1T" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <body>
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
   <td>enter the number1</td>
   <td><input type="text" class="form-control" name="number1"></td>
   </tr>
   <tr>
   <td>enter the number2</td>
   <td><input type="text" class="form-control" name="number2"></td>
   </tr>
   <tr>
   <td>enter the number3</td>
   <td><input type="text" class="form-control" name="number3"></td>
   </tr>
   <tr>
    <td></td>
    <td><button type="submit" class="btn btn-info" name="but">largest</button></td>
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
       $a=$_GET['number1'];
       $b=$_GET['number2'];
       $c=$_GET['number3'];
       if($a>$b)
       {
           if($a>$c)
           {
               echo $a ;
           }
           else{
               echo $c;
           }
       }
       else{

           if($b>$c)
           {
               echo $b ;

           }
           else
           {
               echo $c ;
           }
       }
    }

       
   
  
?>

    
