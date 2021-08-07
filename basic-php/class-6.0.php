<?php

// switch statement
$mark = 100.1;
$result = null;
// if ($mark >= 0 && $mark < 33) {
//   $result = 'fail';
// } else if ($mark >= 33 && $mark < 40) {
//   $result = 'd';
// } else if ($mark >= 40 && $mark < 50) {
//   $result = 'c';
// } else if ($mark >= 50 && $mark < 60) {
//   $result = 'b';
// } else if ($mark >= 60 && $mark < 70) {
//   $result = 'a-';
// } else if ($mark >= 70 && $mark < 80) {
//   $result = 'a';
// } else if ($mark >= 80 && $mark <= 100) {
//   $result = 'a+';
// } else {
//   $result = 'Wrong Input';
// }
// $result = null;
switch ($mark) {
  case $mark >= 0 && $mark < 33:
    // echo 'hello-1 <br />';
    $result = 'fail';
    break;
  case $mark >= 33 && $mark < 40:
    // echo 'hello-2 <br />';
    $result = 'd';
    break;
  case $mark >= 40 && $mark < 50:
    // echo 'hello-3 <br />';
    $result = 'c';
    break;
  case $mark >= 50 && $mark < 60:
    // echo 'hello-4 <br />';
    $result = 'b';
    break;
  case $mark >= 60 && $mark < 70:
    // echo 'hello-5 <br />';
    $result = 'a-';
    break;
  case $mark >= 70 && $mark < 80:
    // echo 'hello-6 <br />';
    $result = 'a';
    break;
  case $mark >= 80 && $mark <= 100:
    // echo 'hello-7 <br />';
    $result = 'a+';
    break;
  default:
    echo 'Wrong Input';
    break;
}
echo $result;
