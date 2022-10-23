<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Mahasiswa</title>
</head>
<body>
    <h2 align="center">Biodata Mahasiswa</h2>
    <p align="center">
    Nama = <?php echo $_POST["nama"]; ?><br>
    Password = <?php echo $_POST["password"]; ?><br>
    Skill = <?php echo $_POST["skill"]; ?><br>
    Gender = <?php echo $_POST["gender"]; ?><br>
    Email =<?php echo $_POST ["email"]; ?>
</p>
</body>
</html>