<?php
$a = array(
   array(
       'id' => 5698,
       'first_name' =>'Rohit',
       'last_name'  => 'kumar',
   ) ,
   array(
       'id' => 4767,
       'first_name' => 'shivam',
       'last_name'  => 'kumar'
   ),
   array(
    'id' => 4760,
    'first_name' => 'mohammad',
    'last_name'  => 'Adil'
      )
 );
   $lastnames = array_column($a, 'last_name');
   print_r($lastnames);
?>
