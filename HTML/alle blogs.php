<?php 
$stmt = $pdo->query('SELECT * FROM blog');
foreach($stmt->fetchAll() as $x) {
    var_dump($x);

}










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



    </main>
</body>

</html>