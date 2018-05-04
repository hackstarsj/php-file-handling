<?php

//========Appending Text in Already Exist Files After The Old Contents==========


$file=fopen("file.txt","a");
fwrite($file,"I am New String and Writing Data in newfile2.txt");
fclose($file);


