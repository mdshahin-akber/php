<?php

include_once './config.php';

$db_connection = mysqli_connect($host, $user, $pass, $database, $port);

if ($db_connection) {
    echo 'connected';
}

$sql = 'SELECT * FROM users';

$results = mysqli_query($db_connection, $sql);

$users =  mysqli_fetch_all($results, MYSQLI_ASSOC);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Document</title>
    <!-- <style>
    table {
        width: 40%;
        height: 80%;
        border: 2px solid #000;
        border-collapse: collapse;
    }

    td,th {
        border: 2px solid #000;
    }
    tr {
        text-align: center;
    }
</style> -->

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

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>user</th>
                    <th>gmail</th>
                    <th>pass</th>
                    <th>action</th>
                </tr>
            </thead>
            <?php foreach ($users as $user) { ?>
                <tr>
                    <td><?php echo $user['id'] ?></td>
                    <td><?php echo $user['username'] ?></td>
                    <td><?php echo $user['email'] ?></td>
                    <td><?php echo $user['password'] ?></td>
                    <td>primary</td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>