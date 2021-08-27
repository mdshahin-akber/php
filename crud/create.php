<?php

$host = 'localhost';
$user = 'root';
$pass = '1234';
$database = 'shahin_db';
$port = '3307';

$db_connection = mysqli_connect($host, $user, $pass, $database, $port);

if (!$db_connection) {
  echo 'this is not connected';
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $data = $_POST;
  $username = $data['username'];
  $email = $data['email'];
  $password = $data['password'];

  $sql = "INSERT INTO `users`(`username`, `email`, `password`) VALUES('{$username}', '{$email}', '{$password}')";

  $result = mysqli_query($db_connection, $sql);
  if ($result) {
    echo 'Data successfully inserted';
  } else {
    echo 'somthing went wrong';
  }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Operation</title>
</head>

<body>
  <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="username">Username</label>
    <input type="text" name="username" id="username">
    <label for="email">Email</label>
    <input type="email" name="email" id="email">
    <label for="password">Password</label>
    <input type="password" name="password" id="password">
    <button type="submit">save</button>
  </form>
</body>

</html>