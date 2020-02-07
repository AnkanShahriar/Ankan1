<?php
  
 $a=10;
 $b=20;
 $c=30;
 
 echo" The numbers being compared are : ".$a.",".$b.",".$c."<br>";
 
 if($a > $b && $a > $c)
 {
	 echo " The biggest number is : ".$a;
 }
  else if($b > $a && $b > $c)
 {
	 echo " The biggest number is : ".$b;
 }
  else
 {
	 echo " The biggest number is : ".$c;
 }


?>