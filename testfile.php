<?php 
//testfile.php
/*$fn=fopen("testfile.txt", 'w') or die("Failed to create file");
$text=<<<_END
Line 1
Line 2
Line 3
_END;
fwrite($fn, $text) or die("Could not write to file");
fclose($fn);
echo "File 'testfile.txt' written successfully";*/

$fn=fopen("testfile.txt", 'r') or die("File does not exist or you lack permission to open it.");
$line=fgets($fn);
fclose($fn);
echo $line;

 ?>