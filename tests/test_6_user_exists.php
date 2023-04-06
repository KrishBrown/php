<?php
    include("/var/www/html/test.php");

    $rtemp=rand(1,10000);
    $r1=create_user("usernamekl","p@ssword1");
    $r2=create_user("usernamekl","p@ssword1");
    #printf("1=$r1\n2=$r2\n");
    if($r1==0 && $r2==6)
        printf("true\n");
    else
        printf("false\n");
?>