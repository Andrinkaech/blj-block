<?php
$pdo = new PDO('mysql:host=localhost;dbname=wordpress', 'root', '');
$sql = "SELECT Namee, Titel, Textt, Datetimee, Bilder FROM blog";
// foreach ($pdo->query($sql) as $row) {
//     echo $row['Namee']." ".$row['Titel']."<br />";
//     echo "Textt: ".$row['Textt']."<br /><br />";
//     echo "Datetimee: ".$row['Datetimee']."<br /><br />";
//  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/formular.css">
    <link rel="stylesheet" href="../CSS/navigatorstyle.css">
    <title>Document</title>
</head>

<body>
    <main>
        <header>
            <?php include 'navigation.php' ?>
        </header>
        <?php
        foreach ($pdo->query($sql) as $row) : ?>
            <p class="Titel">
                <br>
                <?= $row['Titel']
                ?>
            </p>
            <p class="border">
                <?= $row['Textt']
                ?>
            </p>

            </p>
            <p>
            
            <p class="ueberschrift">
                <?= $row['Namee']
                ?>
            </p>
            <p>
                <?= $row['Datetimee']
                ?>
            </p>
                <img src= <?= $row['Bilder']?>>
                <?php include 'Kommentarfunktion' ?>


            
            <p class="Linie"></p>
        <?php endforeach ?>

    </main>
</body>

</html>