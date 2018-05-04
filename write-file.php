<?php
//==================Creating File Using file_put_contents (If file Not Exist Then Create a New File)===========================
file_put_contents("newfile.txt","Hello i am writing data in newfiles.txt");


//==================Writing Contents in file using fwrite =================================


$file=fopen("newfile2.txt","w");
fwrite($file,"I am New String and Writing Data in newfile2.txt");
fclose($file);