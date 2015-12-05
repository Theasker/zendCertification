<?php
class nombre_clase
{
    function __construct()
    {
        echo __METHOD__,"\n";
    }
}
function nombre_func()
{
    echo __FUNCTION__,"\n";
}
const nombre_const = "global";

$a = 'nombre_clase';
$obj = new $a; // imprime nombre_clase::__construct
$b = 'nombre_func';
$b(); // imprime nombre_func
echo constant('nombre_const'), "\n"; // imprime global
?>