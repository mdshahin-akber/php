<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
</head>

<body>

  <?php


  if ($_GET) {
    // dnd($_GET);
    $user = $_GET['user'];
    $pass = $_GET['pass'];
    echo $pass;
  } else {
    // dnd($_POST);
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    echo $pass;
  }

  function dnd($data)
  {
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    // die;
  }
  ?>

  <form action="" method="GET">
    <label for="username">Username</label>
    <input type="text" name="user" id="username">
    <label for="pasword">Password</label>
    <input type="password" name="pass" id="pasword">
    <button type="submit">Login</button>
  </form>
</body>

</html>