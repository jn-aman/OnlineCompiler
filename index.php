<html>
<body>
<?php
    $myfile = fopen("words.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
    $text[] = fgets($myfile);
}
fclose($myfile);
print_r($text[0]);
?>
</body>
</html>