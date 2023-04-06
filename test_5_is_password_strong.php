<?php
    include("/var/www/html/test.php");

    $r1=create_user("username","password");
    $r2=create_user("username","p@ssword");
    $r3=create_user("username","p@ssword1")

    if($r1==5 && $r2==5 && $r3==0)
        printf("true");
    else
        printf("false");
?>