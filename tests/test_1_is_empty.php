<?php
    include("/var/www/html/test.php");

    $r1=create_user("","p@ssword1");
    $r2=create_user("","");
    $r3=create_user("username","");
    $r4=create_user("username","p@ssword1");

    if($r1==1 && $r2==1 && $r3==1 && $r4 == 0)
        printf("true");
    else
        printf("false");
?>
