<?php
$a1=2.0;
$a2=1;

$b1=4;
$b2=2;

$c1=6;
$c2=3;


$res1 = $a1/$a2;
$res2 = $b1/$b2;
$res3 = $c1/$c2;

echo "A(".$a1.", ".$a2.")"."\tB(".$b1.", ".$b2.")"."\tC(".$c1.", ".$c2.")";

//echo $res1." ".$res2." ".$res3;


If ( ($res1 == $res2) && ($res1 == $res3) && ($res2 == $res3) )
    echo "<br><br>A, B y C están en la misma recta";
else
    echo "<br><br>A, B y C no están en la misma recta";