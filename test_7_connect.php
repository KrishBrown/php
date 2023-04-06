<?php
    include("/var/www/html/test.php");
    
    $r1=connect("usernameka","p@ssword1");

    $r2=connect("usernameka","p@ssword12");

    $r3=connect("OR='1'","OR ='1'");

    $r4=connect("okokok","okokok");
   
    if($r1==0 && $r2==10 && $r3==12 && $r4 == 11)
        printf("true\n");
    else
        printf("false\n");
?>