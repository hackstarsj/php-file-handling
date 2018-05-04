<?php
//==================file_get_contents("filename")==================================
echo "This is The Contents of file.txt Reading Using file_get_contents function()  : = ".file_get_contents("file.txt")."<br>";
echo "<hr>";
//==================readfile("filename")==================================
echo "This is The Contents of file.txt Reading Using readfile()  : = <br>".readfile("java.txt")."<br>";
echo "<hr>";
//==================fread(fopen("filename"),filesize("filename"))==================================
echo "This is The Contents of file.txt Reading Using fopen function()  using mode <b>r</b> : = ".fread(fopen("javascript.txt","r"),filesize("javascript.txt"))."<br>";
