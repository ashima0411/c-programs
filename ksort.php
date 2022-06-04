<?php
echo"ashima";
echo"<br>";
$arr=array(10,20,30,2,4,3);

ksort($arr);
$len=count($arr);
for($i=0;$i<$len;$i++){
    echo$arr[$i];
    echo"<br>";
}



?>
