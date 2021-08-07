<?php

// loop

// for
// while 
// do while
// foreach

// echo 'hello shahin 1<br />';
// echo 'hello shahin 2<br />';
// echo 'hello shahin 3<br />';
// echo 'hello shahin 4<br />';
// echo 'hello shahin 5<br />';
// echo 'hello shahin 6<br />';
// echo 'hello shahin 7<br />';
// echo 'hello shahin 8<br />';
// echo 'hello shahin 9<br />';
// echo 'hello shahin 10<br/>';

// initialization, condition, increment/decrement counter
// for loop

// for( initialization ; condition ; increment/decrement counter) {
//   //statement
// }

for ($i = 1; $i <= 10; $i++) {
  echo "hello shahin {$i}<br />";
}
echo '<br>';

// while loop
// initialization
// while(condition) {
//   statement
//   increment/decrement counter
// }
$init = 0;

while( $init < 20) {
  $number = $init+1;
  echo "hello shahin {$number} <br />";
  $init+=1;
}

