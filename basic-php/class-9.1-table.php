<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <table border="2" cellpadding='5'>
    <tr>
      <th>Name</th>
      <th>Roll</th>
      <th>Class</th>
    </tr>

    <?php foreach ($students as $student) { ?>

      <tr>
        <td><?php echo $student['name'] ?></td>
        <td><?php echo $student['roll'] ?></td>
        <td><?php echo $student['class'] ?></td>
      </tr>

    <?php } ?>
  </table>
</body>

</html>