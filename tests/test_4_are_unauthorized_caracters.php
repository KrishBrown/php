<?php
    include("/var/www/html/test.php");

    $r1=create_user("username@","p@ssword1");
    $r2=create_user("username@2","p@ssword1{}");
    $r3=create_user("usernamekf","p@ssword1{}");
    $r4=create_user("usernamekg","p@ssword1");
    if($r1==4 && $r2==4 && $r3==4 && $r4 == 0)
        printf("true\n");
    else
        printf("false\n");
?>