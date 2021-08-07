<?php
// logicial operator

/****** AND operation  ******/
// true && true = true;
// true && false = false;
// false && false = false;

// if(true && true) {
//   echo 'true';
// }
$value = 5;

if ($value < 10 && $value > 4 && $value < 8 && $value > 11) {
  echo 'true';
} else {
  echo 'false';
}
echo '<br/>';
/****** OR operation  ******/
// true && true = true;
// true && false = true;
// false && false = false;

if (false || false) {
  echo 'true';
} else {
  echo 'false';
}
echo '<br />';

/****** NOT operation  ******/
// !true = false;
// !false = true;
$value = false;
if( !$value ) {
  echo 'it\'s true';
} else {
  echo 'it\'s false';
}
echo '<br />';

if( !$value || false) {
  echo 'true';
}

echo '<br />';
/****** XOR operation  ******/
// false xor false = false;
// true xor false = true;
// false xor true = true;
// true xor true = false;
if(true xor true ) {
  echo 'false ';
} else if( false xor true ) {
  echo 'true';
}
