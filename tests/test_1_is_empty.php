<?php
    include("/var/www/html/test.php");

    $r1=create_user("","p@ssword1");
    $r2=create_user("","");
    $rtemp=rand(1,10000);
    $r3=create_user("usernamek10".$rtemp,"");
    $rtemp=rand(1,10000);
    $r4=create_user("usernamek11".$rtemp,"p@ssword1");

    if($r1==1 && $r2==1 && $r3==1 && $r4 == 0)
        printf("1=$r1\n2=$r2\n3=$r3\n4=$r4\ntrue\n");
    else
        printf("false\n");
?>
