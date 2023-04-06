<?php
    include("/var/www/html/test.php");

    $r1=create_user("usernamek1","password");
    $r2=create_user("usernamek2","p@ssword");
    $rtemp=rand(1,10000);
    $r3=create_user("usernamek3".$rtemp,"p@ssword1");

    if($r1==5 && $r2==5 && $r3==0)
        printf("true\n");
    else
        printf("false\n");
?>