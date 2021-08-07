<?php

// indexing array

// $a = 1;
// $b = 2;
// $c = 3;

// $a = array(1, 2, 3, 'abbas', 'shahin');
$a = [1, 2, 3, 'abbas', 'shahin'];

$a[5] = 'hello';

$a[] = 'black-1';
$a[] = 'black-2';

ksort($a);

// echo count($a);

// var_dump($a);
echo '<br>';

for ($i = 0; $i < count($a); $i++) {
  echo $a[$i] . '<br>';
}
