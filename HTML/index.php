<?php
$pdo2 = new pdo('mysql:host=mysql2.webland.ch;dbname=d041e_dagomez', 'd041e_dagomez', '54321_Db!!!', [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
]);
$stmt = $pdo2->query('SELECT url, description FROM urls order by description asc');
$otherblogs = $stmt->fetchAll();

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/style.css">
  <link rel="stylesheet" href="../CSS/navigatorstyle.css">
  <link rel="stylesheet" href="../CSS/formular.css">


  <title>Document</title>


</head>

<body>
<main>
  <div class="grid-container">
    <div class="grid-item1" id="titel">Mein Blog</div>
    <div class="navi"><?php include 'navigation.php' ?></div>
    <div class="grid-item2">Neueste Blog einträge</div>
    <div class="grid-item3">Andere Blogs
      <?php foreach ($otherblogs as $otherblog) { ?>
        <a href=<?= $otherblog["url"] ?>><br><?= $otherblog["description"] ?></a>
        <?php } ?>

    </div>

  </div>
  <div class="grid-item4">footer</div>
  </main>
</body>

</html>