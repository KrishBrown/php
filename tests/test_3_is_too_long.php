<?php
    include("/var/www/html/test.php");

    $r1=create_user("aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa","p@ssword1");
    $r2=create_user("aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa","bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb");
    $rtemp=rand(1,10000);
    $r3=create_user("username".$rtemp,"bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb");
    $rtemp=rand(1,10000);
    $r4=create_user("username".$rtemp,"p@ssword1");

    if($r1==3 && $r2==3 && $r3==3 && $r4 == 0)
        printf("true\n");
    else
        printf("false\n");
?>