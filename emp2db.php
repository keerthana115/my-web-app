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
   
   <td>emp name</td>
   <td><input type="text" class="form-control" name="name"></td>
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
      
       $servername="localhost";
       $dbusername="root";
       $dbpass="";
       $dbname="employee";
       
       $connection=new mysqli($servername,$dbusername,$dbpass,$dbname);
       $sql="SELECT `empname`, `designation`, `salary`, `place`, `mobile`, `annualincome` FROM `empinfo` WHERE `empname`='$ename'";
       $result=$connection->query($sql);
       if($result->num_rows>0)
      {
          while($row=$result->fetch_assoc())
          {
            
              $s=$row['empname'];
              $y=$row['designation'];
              $i=$row['salary'];
              $g=$row['place'];
              $m=$row['mobile'];
              $a=$row['annualincome'];
             
              echo "<table class='table'>";
         echo "<tr> <td>  empname</td> <td> $s</td> </tr>";
       echo "<tr> <td>designation </td> <td> $y</td> </tr>";
       echo "<tr> <td> salary</td> <td> $i</td> </tr>";
       echo "<tr> <td> place</td> <td> $g</td> </tr>";
       echo "<tr> <td>mobile</td> <td> $m</td> </tr>";
       echo "<tr> <td> annualincome</td> <td> $a</td> </tr>";
      
      echo"</table>";

              
              
              
          }
      }
      else
      {
          echo"invalid";
      }
   }
   
   ?>