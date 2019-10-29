<!DOCTYPE html>
<html>
<body>
<?php
$myfile = fopen("kuet.txt", "r+") or die("Unable to open file!");
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>
</body>
</html>