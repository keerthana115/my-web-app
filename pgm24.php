<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyROiXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9Jv0RxT2MZZw1T" crossorigin="anonymous">
 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    body
        {
            background: green;
        }
        </style>
</head>
<body>
<div class="container">
    <div class="row">
    <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-x1-4">
   
    </div>
    <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-x1-4">
    <form method="POST">
   
   <table class="table">
  
   <tr>
   <td>productname</td>
   <td><input type="text" class="form-control" name="name"></td>
   </tr>

  
   
   <td>price</td>
   <td><input type="text" class="form-control" name="ppy"></td>
   </tr>

<tr>
   <td>description</td>
   <td><input type="text" class="form-control" name="des"></td>
   </tr>

   <tr>
   <td>model</td>
   <td><input type="text" class="form-control" name="mdl"></td>
   </tr>

   <tr>
   <td>year</td>
   <td><input type="date" class="form-control" name="years"></td>
   </tr>
   <tr>
   <td>dealername</td>
   <td><input type="text" class="form-control" name="dname"></td>
   </tr>
   <tr>
<td><button class="btn btn-success" type="reset"name="rst">clear</button></td>
<td><button class="btn btn-secondary" type="submit"name="but">register</button></td>
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
   
    if(isset($_POST['but']))
   {
       $pname=$_POST['name'];
      $price=$_POST['ppy'];
       $description=$_POST['des'];
       $model=$_POST['mdl'];
       $yr=$_POST['years'];
       $dealer=$_POST['dname'];

       $servername="localhost";
       $dbusername="root";
       $dbpass="";
       $dbname="product";
       
       $connection=new mysqli($servername,$dbusername,$dbpass,$dbname);
       $sql="INSERT INTO `productdetails`(`productname`, `price`, `description`, `model`, `year`, `dealername`) VALUES  ('$pname',$price,'$description','$model','$yr','$dealer')";
       $result=$connection->query($sql);
       if($result===TRUE)
       {
           echo"success";
   }else
   {
       echo $connection->error;
   }
       

    }
  ?>
