<html>
<body>
<?php
 
$p=$_SERVER['DOCUMENT_ROOT']."/compilers/words.txt";
 $myfile = fopen($p, "r") or die("Unable to open file!");

 while(!feof($myfile)) {
    $os[] = fgets($myfile);
}
fclose($myfile);


function match_my_string($needle , $haystack ) {
  if (strpos($haystack, $needle) !== false) return true;
  else return false;
}
$code="hello i am aman ar";
$check=false;
foreach ($os as $char1) {

$check=match_my_string($char1,$code);
if($check)
	{$wd=$char1;
		break;

}
}
echo $wd;
?>
</body>
</html>