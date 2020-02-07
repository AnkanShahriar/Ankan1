<?php
  
 $a=10;
 $b=21;
 $c=30;
 
 echo" The numbers being used are : ".$a.",".$b.",".$c."<br>";
 
 function odd_even($value)
 {
	 if($value%2==0)
	 {
		 echo $value." is an even number "."<br>";
	 }
	 else
		 echo $value." is an odd number "."<br>";
 }
 
 odd_even($a);
 odd_even($b);
 odd_even($c);


?>