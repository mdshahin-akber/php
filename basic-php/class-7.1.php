<?php

$a = 20;
while ($a >= 1) {
  echo "Even {$a} <br> ";
  $a--;
}

echo '<br>';

// do while 
$main = 1;
do {
  echo "Odd {$main} <br>";
  $main += 2;
} while ($main <= 10);
