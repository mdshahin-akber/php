<?php

// assocative array
$student1 = [
  'name' => 'Shahin',
  'roll' => 12,
  'class' => 6
];

$student2 = [
  'name' => 'abbas',
  'roll' => 5,
  'class' => 6
];

// echo '<pre>';
// var_dump($student1, $student2);
// echo '</pre>';

// echo $student1['name'];
// echo $student1['roll'];
// echo $student1['class'];
// echo '<pre>';
// echo $student2['name'];
// echo $student2['roll'];
// echo $student2['class'];

// foreach( array as  key => value) {
//   statement
// }

foreach($student1 as $key => $value) {
  echo "{$key} : {$value} <br>";
}


