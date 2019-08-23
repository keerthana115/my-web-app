<?php
$i=237;
$rem;
$rev=0;
while($i>1)
{
    $rem=$i%10;
    $rev=($rev*10)+$rem;
    $i=($i/10);
}
    echo $rev;
 
  
?>