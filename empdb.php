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
   <td>emp id</td>
   <td><input type="number" class="form-control" name="id"></td>
   </tr>
   <td>emp name</td>
   <td><input type="text" class="form-control" name="name"></td>
   </tr>
   <td>designation</td>
   <td><input type="text" class="form-control" name="desgn"></td>
   </tr>
   <td>salary</td>
   <td><input type="text" class="form-control" name="sal"></td>
   </tr>
   <td>place</td>
   <td><input type="text" class="form-control" name="pl"></td>
   </tr>
   <td>mobile</td>
   <td><input type="text" class="form-control" name="mbl"></td>
   </tr>
   <td>annual income</td>
   <td><input type="text" class="form-control" name="ic"></td>
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
     
       $ename=$_POST['name'];
       $design=$_POST['desgn'];
       $salary=$_POST['sal'];
       $place=$_POST['pl'];
       $mobile=$_POST['mbl'];
       $annual=$_POST['ic'];

       $servername="localhost";
       $dbusername="root";
       $dbpass="";
       $dbname="employee";
       
       $connection=new mysqli($servername,$dbusername,$dbpass,$dbname);
       $sql="INSERT INTO `empinfo`(`empname`, `designation`, `salary`, `place`, `mobile`, `annualincome`) VALUES  ('$ename','$design',$salary,'$place',$mobile,$annual)";
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
  
    