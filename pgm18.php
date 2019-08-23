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
    <form method="GET">
   <table class="table">
   <tr>
<td>NAME</td>
<td><input type="text" class="form-control" name="name"></td>
</tr>
<tr>
<td>AGE</td>
<td><input type="number" class="form-control"name="age"></td>
</tr>
<tr>
<td>COLLEGE</td>
<td><input type="text" class="form-control"name="college"></td>
</tr>
<tr>
<td>BRANCH</td>
<td><select class="form-control" name="branch">
<option value="COMPUTER SCIENCE">COMPUTER SCIENCE</option>
<option value="MECHANICAL">MECHANICAL</option>
</select>
</td>
</tr>
<tr>
<td>MOBILE</td>
<td><input type="text" class="form-control"name="mob"></td>
</tr>
<tr>
<td>EMAIL</td>
<td><input type="email" class="form-control"name="email"></td>
</tr>
<tr>
<td>PLACE</td>
<td><input type="text" class="form-control"name="place"></td>
</tr>
<tr>
<td>DOB</td>
<td><input type="date" class="form-control"name="dob"></td>
</tr>
<tr>
<td>USERNAME</td>
<td><input type="text" class="form-control"name="username"></td>
</tr>
<tr>
<td>PASSWORD</td>
<td><input type="password" class="form-control"name="pass"></td>
</tr>
<tr>
<td>CONFIRM PASSWORD</td>
<td><input type="password" class="form-control"name="confirm"></td>
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

   if(isset($_GET['but']))
   {
       $num=$_GET['name'];
       $age=$_GET['age'];
       $col=$_GET['college'];
       $branchs=$_GET['branch'];
       $m=$_GET['mob'];
       $emails=$_GET['email'];
       $place=$_GET['place'];
       $date=$_GET['dob'];
       $uname=$_GET['username'];
       $password=$_GET['pass'];
       $confpassword=$_GET['confirm'];
       echo "<table class='table'>";
       echo "<tr> <td> NAME  </td> <td> $num </td> </tr>";
       echo "<tr> <td>  age</td> <td> $age</td> </tr>";
       echo "<tr> <td> college  </td> <td> $col</td> </tr>";
       echo "<tr> <td> branch </td> <td> $branchs</td> </tr>";
       echo "<tr> <td> mobile  </td> <td> $m</td> </tr>";
       echo "<tr> <td> email </td> <td> $emails</td> </tr>";
       
       echo "<tr> <td> place </td> <td> $place</td> </tr>";
       echo "<tr> <td>dob </td> <td> $date </td> </tr>";
  
       echo "<tr> <td> username</td> <td> $uname </td> </tr>";
       echo "<tr> <td> password</td> <td> $password </td> </tr>";

      
       
      echo "<tr> <td>confpassword  </td> <td> $confpassword</td> </tr>";
      
       echo"</table>";
      
   }
  
?>