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
   <td>NAME</td>
   <td><input type="text" class="form-control" name="name"></td>
   </tr>
   <tr>
   <td>reg no</td>
   <td><input type="text" class="form-control" name="number"></td>
   </tr>
   <tr>
   <td>college</td>
   <td><input type="text" class="form-control" name="college"></td>
   </tr>
   <tr>
   <td>sem</td>
   <td><input type="text" class="form-control" name="semester"></td>
   </tr>
   <tr>
   <td>subj1name</td>
   <td><input type="text" class="form-control" name="s1n"></td>
  
   <td>s1mark</td>
   <td><input type="text" class="form-control" name="s1m"></td>
   
   <td>s1totmark</td>
   <td><input type="text" class="form-control" name="s1t"></td>
   </tr>


   <tr>
   <td>subj2name</td>
   <td><input type="text" class="form-control" name="s2n"></td>
  
   <td>s2mark</td>
   <td><input type="text" class="form-control" name="s2m"></td>
   
   <td>s2totmark</td>
   <td><input type="text" class="form-control" name="s2t"></td>
   </tr>

   <tr>
   <td>subj3name</td>
   <td><input type="text" class="form-control" name="s3n"></td>
  
   <td>s3mark</td>
   <td><input type="text" class="form-control" name="s3m"></td>
   
   <td>s3totmark</td>
   <td><input type="text" class="form-control" name="s3t"></td>
   </tr>

    
   <tr>
   <td>subj4name</td>
   <td><input type="text" class="form-control" name="s4n"></td>
  
   <td>s4mark</td>
   <td><input type="text" class="form-control" name="s4m"></td>
   
   <td>s4totmark</td>
   <td><input type="text" class="form-control" name="s4t"></td>
   </tr>

   <tr>
<td><button type="reset" class="btn btn-info" name="but">reset</button></td>
<td><button type="submit" class="btn btn-info" name="but1">submit</button></td>
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
   if(isset($_POST['but1']))
   {
       $num=$_POST['name'];
       $reg=$_POST['number'];
       $col=$_POST['college'];
       $sem=$_POST['semester'];
       $s1name=$_POST['s1n'];
       $s1ma=$_POST['s1m'];
       $s1to=$_POST['s1t'];
       $s2name=$_POST['s2n'];
       $s2ma=$_POST['s2m'];
       $s2to=$_POST['s2t'];
       $s3name=$_POST['s3n'];
       $s3ma=$_POST['s3m'];
       $s3to=$_POST['s3t'];
       $s4name=$_POST['s4n'];
       $s4ma=$_POST['s4m'];
       $s4to=$_POST['s4t'];
       $p1=($s1ma/$s1to)*100;
       $p2=($s2ma/$s2to)*100;
       $p3=($s3ma/$s3to)*100;
       $p4=($s4ma/$s4to)*100;
       if($p1>=95)
       {
          $g1="s";
       }
       elseif($p1>=90)
       {
           $g1="a+";
       }
       elseif($p1>=85)
       {
           $g1="a";
       }
       elseif($p1>=80)
       {
           $g1="b+";
       }
       elseif($p1>=75)
       {
           $g1="b";
       }
       elseif($p1>=70)
       {
           $g1="c+";
       }
       elseif($p1>=65)
       {
           $g1="c";
       }
       elseif($p1>=60)
       {
           $g1="d+";
       }
       elseif($p1>=55)
       {
           $g1="d";
       }
       elseif($p1>=50)
       {
           $g1="e";
       }
       else
       {
           $g1="F";
       }


       if($p2>=95)
       {
          $g2="s";
       }
       elseif($p2>=90)
       {
           $g2="a+";
       }
       elseif($p2>=85)
       {
           $g2="a";
       }
       elseif($p2>=80)
       {
           $g2="b+";
       }
       elseif($p2>=75)
       {
           $g2="b";
       }
       elseif($p2>=70)
       {
           $g2="c+";
       }
       elseif($p2>=65)
       {
           $g2="c";
       }
       elseif($p2>=60)
       {
           $g2="d+";
       }
       elseif($p2>=55)
       {
           $g2="d";
       }
       elseif($p2>=50)
       {
           $g2="e";
       }
       else
       {
           $g2="F";
       }
       

       if($p3>=95)
       {
          $g3="s";
       }
       elseif($p3>=90)
       {
           $g3="a+";
       }
       elseif($p3>=85)
       {
           $g3="a";
       }
       elseif($p3>=80)
       {
           $g3="b+";
       }
       elseif($p3>=75)
       {
           $g3="b";
       }
       elseif($p3>=70)
       {
           $g3="c+";
       }
       elseif($p3>=65)
       {
           $g3="c";
       }
       elseif($p3>=60)
       {
           $g3="d+";
       }
       elseif($p3>=55)
       {
           $g3="d";
       }
       elseif($p3>=50)
       {
           $g3="e";
       }
       else
       {
           $g3="F";
       }


       if($p4>=95)
       {
          $g4="s";
       }
       elseif($p4>=90)
       {
           $g4="a+";
       }
       elseif($p4>=85)
       {
           $g4="a";
       }
       elseif($p4>=80)
       {
           $g4="b+";
       }
       elseif($p4>=75)
       {
           $g4="b";
       }
       elseif($p4>=70)
       {
           $g4="c+";
       }
       elseif($p4>=65)
       {
           $g4="c";
       }
       elseif($p4>=60)
       {
           $g4="d+";
       }
       elseif($p4>=55)
       {
           $g4="d";
       }
       elseif($p4>=50)
       {
           $g4="e";
       }
       else
       {
           $g4="F";
       }
       if($g1=='F'||$g2=='F'||$g3=='F'||$g4=='F')
       {
           $status= "failed";
        
       }
       else{
           
        $status="Passed";
       }


       echo "<table class='table'>";
       echo "<tr> <td> NAME  </td> <td> $num </td> </tr>";
       echo "<tr> <td>  regno</td> <td> $reg</td> </tr>";
       echo "<tr> <td> college  </td> <td> $col</td> </tr>";
       echo "<tr> <td> semester </td> <td> $sem</td> </tr>";
       echo"</table>";

       echo "<table class='table'>";
       echo "<thead><tr><th>subname</th> <th>mark obtained</th> <th>total mark</th> <th>grade</th></tr></thead>";
       echo "<tr> <td> $s1name</td>
         <td> $s1ma</td>
       <<td> $s1to</td>
       <td> $g1</td></tr>";

       echo "<tr> <td> $s2name</td>
       <td> $s2ma</td>
     <<td> $s2to</td>
     <td> $g2</td></tr>";

    
       
     echo "<tr> <td> $s3name</td>
     <td> $s3ma</td>
   <<td> $s3to</td>
   <td> $g3</td></tr>";


   echo "<tr> <td> $s4name</td>
   <td> $s4ma</td>
 <<td> $s4to</td>
 <td> $g4</td></tr>";

       echo"</table>";
    

    echo "<table class='table'>";
    echo "<tr><td>Status</td><td>$status</td></tr>";
    echo "</table>";
   }
    ?>
       

       
       
       
       