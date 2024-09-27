<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Data Mahasiswa</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylePHP.css">
</head>

<body>
    <div class=" container">
        <h2>Data mahasiswa</h2>
        <?php
        $npm = $_POST['npm'];
        $name = strtoupper($_POST['name']);
        $alamat = strtoupper($_POST['address']);
        $tgl_lahir = $_POST['date'];
        $gender = $_POST['gender'];
        $hobbies = $_POST['hobi'];

        echo "<strong>NPM:</strong> $npm<br>";
        echo "<strong>Name:</strong> $name<br>";
        echo "<strong>Alamat:</strong> $alamat<br>";
        echo "<strong>Tanggal lahir:</strong> $tgl_lahir<br>";
        echo "<strong>Gender:</strong> $gender<br>";
        echo "<strong>Hobi:</strong> $hobbies<br>";
        ?>
    </div>
</body>

</html>