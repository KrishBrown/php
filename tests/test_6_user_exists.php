<?php
    include("/var/www/html/test.php");

    $r1=create_user("username","p@ssword1");
    $r2=create_user("username","p@ssword1");

    if($r1==0 && $r2==6)
        printf("true");
    else
        printf("false");
?>