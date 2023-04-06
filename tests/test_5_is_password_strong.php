<?php
    include("/var/www/html/test.php");

    $r1=create_user("usernameki","password");
    $r2=create_user("usernamekj","p@ssword");
    $rtemp=rand(1,10000);
    $r3=create_user("usernamekk".$rtemp,"p@ssword1");
    printf("1=$r1\n2=$r2\n3=$r3\n");
    if($r1==5 && $r2==5 && $r3==0)
        printf("true\n");
    else
        printf("false\n");
?>