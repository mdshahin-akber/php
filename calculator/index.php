<?php 

include 'function.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculator</title>
  <style>
    .cal {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    form {
      margin-top: 100px;
      width: 30%;
      border: 1px solid #000;
      padding: 20px;
      overflow: hidden;
    }

    input[type="text"] {
      width: 93%;
      padding: 10px 10px;
      margin: 10px 0;
    }

    .error {
      border: 1px solid red;
      color: red;
      padding: 5px;
    }
  </style>
</head>

<body>
  <div class="cal">
    <form action="" method="POST">
      <?php if ($result !== null) { ?>
        <p>Resutl is : <?= $result; ?></p>
      <?php } ?>

      <?php if ($error !== '') : ?>
        <p class="error"><?= $error; ?></p>
      <?php endif; ?>

      <input type="text" name="num_1">
      <input type="text" name="num_2">
      <input type="radio" name="opeatar" value="add"> Add
      <input type="radio" name="opeatar" value="sub"> Sub
      <input type="radio" name="opeatar" value="mul"> Mulit
      <input type="radio" name="opeatar" value="div"> Div
      <br>
      <button type="submit" name="calculate">Calculate</button>
    </form>
  </div>
</body>

</html>