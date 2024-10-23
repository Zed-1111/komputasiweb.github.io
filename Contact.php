<?php
include 'service/database.php';

$sql = "SELECT * FROM content WHERE judul = 'Contact'";
$hasil = $db->query($sql);
$row = $hasil->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    
    <style>
        html, body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            box-sizing: border-box;
        }

        .tampilan{
            background-color:aqua;
            height: 18vh; 
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            font-size: larger;
            color: black;
        }
        
        .desk{
            font-size: larger;
            color: black;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
        $judul=$row['judul'];
        $isi=$row['isi'];
    ?>

    <div class="tampilan">
        
        <h1><?php echo $judul; ?></h1>
    </div>

    <div class="desk">
        <p><?php echo $isi; ?></p>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-2Zl6h7mgB9oBgce+BhS6lg9xmqABe2HEf4OScSxjX5p0g+U1de8Kp4nRbqT3bqZf" crossorigin="anonymous"></script>
</body>
</html>
