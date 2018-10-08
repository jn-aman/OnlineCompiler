<html>
<body>
<?php
 $p=$_SERVER['DOCUMENT_ROOT']."/compilers/words.txt";

 $myfile = fopen($p, "r") or die("Unable to open file!");


// Output one line until end-of-file
while(!feof($myfile)) {
    $os[] = fgets($myfile);
}
fclose($myfile);



foreach ($os as $char2) {
$char2=str_replace("\r\n","",$char2);
$os1[]=$char2;



}

foreach ($os as $char2) {
echo $char2;
}
?>
</body>
</html>