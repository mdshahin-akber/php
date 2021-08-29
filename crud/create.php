<?php

include_once './config.php';

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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <title>Create Operation</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">

        <a class="navbar-brand" href="#">CRUD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="./read.php">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./create.php">Create </a>
            </li>
          </ul>
        </div>
    </div>
</nav>
<div class="container">

  <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="username">Username</label>
    <input type="text" name="username" id="username">
    <label for="email">Email</label>
    <input type="email" name="email" id="email">
    <label for="password">Password</label>
    <input type="password" name="password" id="password">
    <button class="btn btn-success" type="submit">save</button>
  </form>
</div>
</body>

</html>