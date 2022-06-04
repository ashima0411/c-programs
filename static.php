<?php
echo"ashima";
function myfun()
{
    static $x=10;
    echo"$x";
    $x++;
    echo"$x";
}
myfun();
myfun();
myfun();
myfun();
?>
