<?php
    include("/var/www/html/test.php");

    $r1=create_user("aaa","p@ssword1");
    $r2=create_user("aaa","bbb");
    $rtemp=rand(1,10000);
    $r3=create_user("username".$rtemp,"bbb");
    $rtemp=rand(1,10000);
    $r4=create_user("username".$rtemp,"p@ssword1");

    if($r1==2 && $r2==2 && $r3==2 && $r4 == 0)
        printf("true\n");
    else
        printf("false\n");
?>