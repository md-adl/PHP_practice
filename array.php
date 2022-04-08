<?php
// Two- dimensional array
$cars=array
  (
  array("maruti",100,96),
  array("BMW",60,59),
  array("Nano",110,100)
  );
  
echo $cars[0][0].": Ordered : " .$cars[0][1]." . sold: .  " . $cars[0][2]. "<br>";

echo $cars[1][0] .": orderd ; " . $cars[1][1] . ". sold :" . $cars[1][2]. "<br>";


echo $cars[2][0] .": orderd ; " . $cars[2][1] . ". sold :" . $cars[2][2]. "<br>";
?>