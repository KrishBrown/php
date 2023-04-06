<?php
if(connect("usernameka","p@ssword1")==0)
    printf("true");

if(connect("usernameka","p@ssword12")==10)
    printf("false");

if(connect("OR='1'","OR ='1'")==12)
    printf("false");

if(connect("okokok","okokok")==11)
    printf("false");
?>