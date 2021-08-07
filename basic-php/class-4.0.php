<?php

// condition
// Comparison Operators

$string = '12345';
$number = 12345.87;

// var_dump($string);
// var_dump($number);
// echo $string + $number;

// checked data type
// echo gettype($number);

// Comparison Operators identical
if( $string === $number ) {
  echo 'same to';
} else {
  echo 'not same';
}

echo '<br />';

// not equal
if( $string != $number) {
  echo 'not same';
} else {
  echo 'same to';
}

echo '<br />';

// not identical
if( $string !== $number ) {
  echo 'same to';
} else {
  echo 'not same';
}

echo '<br />';

echo $string === $number;

echo '<br />';
if( false ) {
  echo 'this is true';
} else {
  echo 'this is false';
}