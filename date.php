<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l") .  "<br>";

echo  "@ 2010 -" . date("Y") . "<br>"; 
echo "The time is " .date("h:i:sa"). "<br>";
echo "The time is " .date("H:i:sa"). "<br>";


date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa"). "<br>";

$d = mktime(10,20, 30, 07,04,2022);
echo "Created date is " . date("Y-m-d h:i:sa"). "<br>";

$a=strtotime("12:54pm Jan 21 2022");
// strtotime is used to convert user readabele date string into a Unix timestamp
echo "Created date is " . date("Y-m-d h:i:sa", $a);
echo "<br>";
$b=strtotime("12:54pm Jan 21 2022");

echo "Created date is " . date("Y/m/d H:i:sa", $b);
echo "<br>";

$c=strtotime("12:54pm Jan 21 2022");

echo "Created date is " . date("Y-m-d h:i:sa", $c);







?>