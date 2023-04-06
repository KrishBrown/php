<?php
if(connect("usernameka","p@ssword1")==0)
printf("You are logged in. Welcome back.\n");

if(connect("usernameka","p@ssword12")==10)
printf("Wrong password.\n");

if(connect("OR='1'","OR ='1'")==12)
printf("SQL INJECTION!\n");

if(connect("okokok","okokok")==11)
printf("User doesn't exist\n");
?>