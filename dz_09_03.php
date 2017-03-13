
<?php

$flag = true;

for($i = 2; $i <= 100; $i++) {

for($j = 2; $j < $i; $j++) { //<$i
if($i % $j == 0) {
$flag = false;
break;
}
}

if($flag) echo $i. " ";
$flag = true;
}




