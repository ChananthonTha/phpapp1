<?php 
    include "global2.php";
    $num1 = 5;
    $num2 = 13;
    function global_var(){
        $sum = $GLOBALS['num1'] + $GLOBALS['num2'] + $GLOBALS['num3'];
        echo $sum;
    }
    global_var();
?>