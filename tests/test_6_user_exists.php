<?php
    include("/var/www/html/test.php");

    $rtemp=rand(1,10000);
    $r1=create_user("username".$rtemp,"p@ssword1");
    $r2=create_user("username".$rtemp,"p@ssword1");

    if($r1==0 && $r2==6)
        printf("true\n");
    else
        printf("false\n");
?>