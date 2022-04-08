
<?php
$age = array("Rohit"=>"35", "Adil"=>"37", "shivam"=>"43");
ksort($age);

$age1 = array("Rohit"=>"35", "Adil"=>"37", "shivam"=>"43");
arsort($age1);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}

foreach($age1 as $y => $y_value) {
    echo "Key=" . $y . ", Value=" . $y_value;
    echo "<br>";
  }
?>