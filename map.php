<?php
function square($num){
    return($num*$num);
}
$a = array(1,2,3,4,5);
print_r(array_map("square",$a))
?>