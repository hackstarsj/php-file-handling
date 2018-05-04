<?php

//========Reading File Line By Line==========

$file=fopen("filelong.txt","r");
// Output one line until end-of-file
while(!feof($file)) {
    echo fgets($file) . "<br>";
}
fclose($file);

