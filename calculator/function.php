<?php

// var_export($_POST); 
$result = null;
$error = '';
if (isset($_POST['calculate'])) {
  $num_1 = $_POST['num_1'];
  $num_2 = $_POST['num_2'];
  $opeatar = isset($_POST['opeatar']) ? $_POST['opeatar'] : false;

  if ($num_2 === '' || $num_1 === '') {
    $error = 'Number are required!';
  } else if (!$opeatar) {
    $error = 'Select Operator';
  } else {
    switch ($opeatar) {
      case 'add':
        $result = $num_1 + $num_2;
        break;
      case 'sub':
        $result = $num_1 - $num_2;
        break;
      case 'mul':
        $result = $num_1 * $num_2;
        break;
      case 'div':
        $result = $num_1 / $num_2;
        break;
    }
  }

  // if ($opeatar === 'add') {
  //   $result = $num_1 + $num_2;
  // }
  // if ($opeatar === 'sub') {
  //   // $result = $num_1 - $num_2;
  // }
  // if ($opeatar === 'mul') {
  //   $result = $num_1 * $num_2;
  // }
  // if ($opeatar === 'div') {
  //   $result = $num_1 / $num_2;
  // }
}


?>