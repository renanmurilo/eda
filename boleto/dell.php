
<?php

foreach (glob("boletos/*.pdf") as $filename) {
   echo "$filename size " . filesize($filename) . "\n";
   unlink($filename);
}

?>