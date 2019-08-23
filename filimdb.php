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
        background: grey;
        }
</style>
</head>
<body>
<div class="container">
    <div class="row">
    <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-x1-4">
   
    </div>
    <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-x1-6">
    <form method="POST">
    <table class="table">
  
   <tr>
   <td>movie name</td>
   <td><input type="text" class="form-control" name="name"></td>
   </tr>
   
   
   <tr>
   <td></td>
   <td><button class="btn btn-secondary" type="submit"name="but">register</button></td>
</tr>
</table>
</div>
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
     
       $mname=$_POST['name'];
      
       $servername="localhost";
       $dbusername="root";
       $dbpass="";
       $dbname="movie";
       
       $connection=new mysqli($servername,$dbusername,$dbpass,$dbname);
       $sql="SELECT  `moviename`, `actor`, `actress`, `director`, `producer`, `camera`, `releasedyear`, `editing` FROM `moviedetails` WHERE `moviename`='$mname'";
       $result=$connection->query($sql);
       if($result->num_rows>0)
      {
          while($row=$result->fetch_assoc())
          {
            
              $s=$row['moviename'];
              $y=$row['actor'];
              $i=$row['actress'];
              $g=$row['director'];
              $m=$row['producer'];
              $a=$row['camera'];
              $b=$row['releasedyear'];
              $c=$row['editing'];
              echo "<table class='table'>";
         echo "<tr> <td>  moviename</td> <td> $s</td> </tr>";
       echo "<tr> <td>actor </td> <td> $y</td> </tr>";
       echo "<tr> <td> actress</td> <td> $i</td> </tr>";
       echo "<tr> <td> director</td> <td> $g</td> </tr>";
       echo "<tr> <td>producer</td> <td> $m</td> </tr>";
       echo "<tr> <td> camera</td> <td> $a</td> </tr>";
       echo "<tr> <td>releasedyear</td> <td> $b</td> </tr>";
       echo "<tr> <td> editing</td> <td> $c</td> </tr>";
     
      echo"</table>";

              
              
              
          }
      }
      else
      {
          echo"invalid";
      }
   }
   
   ?>