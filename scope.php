<?php
    function local(){
        $num = 45;
        echo "Local variable",$num,"<br />";
    }
    local();
?>

<?php
    function myTest(){
        $lang = "PHP";
        echo "Web development language : ". $lang;
    }
    myTest();
    //echo $lang;//Error
?>