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
    <h1>login</h1>
   <table class="table">
  
   <tr>
   <td>username</td>
   <td><input type="text" class="form-control" name="name"></td>
   </tr>

   <tr>
   <td>password</td>
   <td><input type="password" class="form-control" name="pass"></td>
   </tr>
   <tr>
   <td></td>
<td><button class="btn btn-secondary" type="submit"name="but">login</button></td>
</tr>
   </table>
   </form>
   </div>
   <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-x1-4">
   <form method="POST">
    <h2>register</h2>
   <table class="table">
  
   <tr>
   <td>name</td>
   <td><input type="text" class="form-control" name="name"></td>
   </tr>

   <tr>
   <td>address</td>
   <td><textarea class="form-control" cols="30" rows="5" name="add"></textarea></td>
   </tr>
   <tr>
   <td>district</td>
   <td><select class="form-control" name="district">
<option value="PTA">PTA</option>
<option value="ALAPY">ALAPY</option>
</select>
</td>
</tr>

<tr>
   <td>mobile</td>
   <td><input type="text" class="form-control" name="mobile"></td>
   </tr>

   <tr>
   <td>username</td>
   <td><input type="text" class="form-control" name="uname"></td>
   </tr>

   <tr>
   <td>password</td>
   <td><input type="password" class="form-control" name="pass"></td>
   </tr>
   <tr>
   <td>conf password</td>
   <td><input type="conf password" class="form-control" name="cpass"></td>
   </tr>

   <tr>
<td><button class="btn btn-success" type="reset"name="rst">clear</button></td>
<td><button class="btn btn-secondary" type="submit"name="but1">register</button></td>

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
       $nm=$_POST['name'];
       $pwr=$_POST['pass'];
       echo "<table class='table'>";
       echo "<tr> <td> username</td> <td> $nm </td> </tr>";
       echo "<tr> <td>  user password</td> <td> $pwr</td> </tr>";
       echo"</table>";
    }
  
    if(isset($_POST['but1']))
   {
       $unm=$_POST['name'];
       $adr=$_POST['add'];
       $dis=$_POST['district'];
       $mb=$_POST['mobile'];
       $urnm=$_POST['uname'];
       $psr=$_POST['pass'];
       $cp=$_POST['cpass'];
       echo "<table class='table'>";
       echo "<tr> <td> username</td> <td> $unm </td> </tr>";
       echo "<tr> <td> address</td> <td> $adr</td> </tr>";
       echo "<tr> <td>district</td> <td> $dis</td> </tr>";
       echo "<tr> <td> mobile</td> <td> $mb</td> </tr>";
       echo "<tr> <td> username</td> <td> $urnm </td> </tr>";
       echo "<tr> <td> password</td> <td> $psr</td> </tr>";
       echo "<tr> <td> conf password</td> <td> $cp</td> </tr>";
      
       echo"</table>";
    }
  ?>
