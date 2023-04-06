<?php
    include("/var/www/html/test.php");

    $rtemp=rand(1,10000);
    $r1=create_user("usernamekrish","p@ssword1");
    $r2=create_user("usernamekrish","p@ssword1");

    if($r1==0 && $r2==6)
        printf("1=$r1\n2=$r2\ntrue\n");
    else
        printf("false\n");
?>
