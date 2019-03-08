<?php
$fp = fopen("./test4.txt","r");
while($line = fgets($fp)){
  echo $line;
}
fclose($fp);
?>
