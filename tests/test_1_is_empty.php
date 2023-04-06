<?php
    include("/var/www/html/test.php");

    $r1=create_user("","p@ssword1");
    $r2=create_user("","");
    $rtemp=rand(1,10000);
    $r3=create_user("username".$rtemp,"");
    $rtemp=rand(1,10000);
    $r4=create_user("username".$rtemp,"p@ssword1");

    if($r1==1 && $r2==1 && $r3==1 && $r4 == 0)
        printf("true\n");
    else
        printf("false\n");
?>