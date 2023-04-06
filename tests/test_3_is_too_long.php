<?php
    include("/var/www/html/test.php");

    $r1=create_user("aaaaaaaaaaaaaaaaaaaaaaaaaaaaaac","p@ssword1");
    $r2=create_user("aaaaaaaaaaaaaaaaaaaaaaaaaaaaaab","bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb");
    $r3=create_user("usernamekd","bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb");
    $r4=create_user("usernameke","p@ssword1");
    printf("1=$r1\n2=$r2\n3=$r3\n4=$r4\n");
    if($r1==3 && $r2==3 && $r3==3 && $r4 == 0)
        printf("true\n");
    else
        printf("false\n");
?>