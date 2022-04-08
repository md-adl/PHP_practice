<?php
$friends = array("Rohit", "Shivam","Pankaj","abid");
$cars = array("BMW", "Maruti", "Toyota");
 sort($friends);
 rsort($cars);

 $a = count($friends);
 for($x = 0; $x<$a; $x++){
     echo $friends[$x];
     echo "<br>";
 }
 $b = count($cars);
for($y = 0; $y<$b; $y++){
    echo $cars[$y];
    echo "<br>" ;   
}

?>