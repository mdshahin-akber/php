<?php


// function 2 angument

$num_2 = 100;
$num_1 = 200;

function sum($num_1, $num_2)
{
  return $num_1 + $num_2;
}


echo sum($num_2, $num_1);
echo '<br>';
echo sum(50, 20);
echo '<br>';

function infinitySum(...$nums)
{
  var_dump($nums);
  $sum = 0;
  for($i=0; $i < count($nums); $i++) {
    $sum = $sum + $nums[$i];
  }
  return $sum;
}


echo infinitySum(1,2,3,4,5,6,7,8,9,10);