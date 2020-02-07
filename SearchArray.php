<?php
  
 $key1=10;
 $key2=51;
 $array= array(1,21,13,44,51,196,79,38,91,10,11);

  function search($key , $array)
  {
	  for($i=0;$i<count($array);$i++)
 {
	 if($key == $array[$i])
 {
	 echo $key." was found at : ".$i."<br>";
 }
 
 }
  }
  
  search($key1,$array);
  search($key2,$array);
 

 

 


?>