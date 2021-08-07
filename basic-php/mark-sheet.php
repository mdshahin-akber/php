<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mark Sheet</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: sans-serif;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    form {
      width: 30%;
      margin-top: 50px;
      border: 1px solid #ddd;
      padding: 40px;
      border-radius: 4px;
    }

    .input-group {
      width: 100%;
      margin-bottom: 20px;
    }

    .input-group label {
      display: block;
      margin-bottom: 10px;
      font-size: 1.5rem;
      color: #616161;
    }

    .input-group input {
      width: 100%;
      padding: 10px;
      outline: 0;
      border-radius: 4px;
      border: 1px solid #ddd;
    }

    button {
      padding: 10px;
      outline: 0;
      border: none;
      background-color: #0277ff;
      border-radius: 4px;
      color: #fff;
      font-size: 15px;
    }

    p {
      width: 100%;
      border-radius: 4px;
      border: 1px solid #ddd;
      padding: 10px;
      margin-top: 10px;
      background-color: #d4edda;
    }
  </style>
</head>

<body>
  <?php

  /**
   * 0 < 33 => fail
   * 33 < 40 => D
   * 40 < 50 => C
   * 50 < 60 => B
   * 60 < 70 => A-
   * 70 < 80 => A
   * 80 >= => A+
   */
  $result = '';
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $mark = $_POST['mark'];
    if ($mark < 33) {
      $result = 'fail';
    } else if ($mark < 40) {
      $result = 'd';
    } else if ($mark < 50) {
      $result = 'c';
    } else if ($mark < 60) {
      $result = 'b';
    } else if ($mark < 70) {
      $result = 'a-';
    } else if ($mark < 80) {
      $result = 'a';
    } else if ($mark >= 80) {
      $result = 'a+';
    }
  }
  ?>


  <div class="container">
    <form action="" method="POST">
      <div class="input-group">
        <label for="mark">Input Mark</label>
        <input type="number" name="mark" id="mark">
      </div>
      <button>See Result</button>
      <?php if ($result !== '') :  ?>
        <p>Your Result is <?php echo $result ?></p>
      <?php endif; ?>
    </form>
  </div>
</body>

</html>