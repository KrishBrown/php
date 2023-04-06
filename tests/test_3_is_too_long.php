<?php
    include("/var/www/html/test.php");

    $r1=create_user("aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa","p@ssword1");
    $r2=create_user("aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa","bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb");https://github.com/KrishBrown/php/blob/main/test_3_is_too_long.php
    $r3=create_user("username","bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb");
    $r4=create_user("username","p@ssword1");

    if($r1==3 && $r2==3 && $r3==3 && $r4 == 0)
        printf("true");
    else
        printf("false");
?>
