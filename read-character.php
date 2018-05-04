<?php
$file=fopen("filelong.txt","r");
// Output one line until end-of-file
while(!feof($file)) {
echo fgetc($file) ;
}
fclose($file);
