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
    body {
      background-image: url('https://2.bp.blogspot.com/-5K9ZQ8-YvBI/WApQJi7naJI/AAAAAAAAFC0/MPn9jGROQq8ADI48m8D858BkV8_3OUA0QCLcB/s1600/Dark%2Bnature%2BBackgrounds%2B2.jpg');
    }

    .cal {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    form {
      margin-top: 100px;
      width: 30%;
      padding: 19px;
      border: 3px solid #fffccc;
      border-radius: 20px;
      background: -moz-linear-gradient(90deg, hsla(221, 45%, 73%, 1) 0%, hsla(220, 78%, 29%, 1) 100%);
      box-shadow: 13px 10px 5px hsl(220, 8.6%, 86.3%);
    }

    input[type="text"] {
      width: 94%;
      padding: 10px 10px;
      margin: 10px 0;
      border-radius: 15px;
      background-color: hsla(221, 45%, 73%, 1);
      border: 3px solid #fffccc;
      outline: 0;
    }

    .error {
      border: none;
      color: red;
    }

    input[type="text"]:hover {
      color: #fff;
    }

    button {
      border-radius: 10px;
      background-color: #fffccc;
      padding: 4px;
      margin-top: 5px;
      width: 100%;
    }

    p {
      color: lightgreen;
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

      <input type="text" name="num_1" placeholder="Enter Number...">
      <input type="text" name="num_2" placeholder="Enter Number...">

      <center>
        <input type="radio" name="operator" value="add"> (+)
        <input type="radio" name="operator" value="sub"> (-)
        <input type="radio" name="operator" value="mul"> (*)
        <input type="radio" name="operator" value="div"> (/)
      </center>
      <br>
      <button type="submit" name="calculate"><b style="color: gray">Calculate</b></button>
    </form>
  </div>
</body>

</html>