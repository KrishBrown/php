<?php
    include("/var/www/html/test.php");

    $r1=create_user("aaa","p@ssword1");
    $r2=create_user("aab","bbb");
    $r3=create_user("usernamekb","bbb");
    $r4=create_user("usernamekc","p@ssword1");
 
    if($r1==2 && $r2==2 && $r3==2 && $r4 == 0)
        printf("true\n");
    else
        printf("false\n");
?>