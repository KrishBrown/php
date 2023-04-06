<?php
    include("/var/www/html/test.php");

    $r1=create_user("usernameki","password");
    $r2=create_user("usernamekj","p@ssword");
    $r3=create_user("usernamekk","p@ssword1");
    if($r1==5 && $r2==5 && $r3==0)
        printf("true\n");
    else
        printf("false\n");
?>