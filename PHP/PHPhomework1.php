<?php
  
$x = 0;
for ($i = 0; $i < 51; $i++) {
    $x += $i % 2 * $i;
}
echo $x;

?>
