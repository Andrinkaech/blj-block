<?php
$errors = [];

$name = $_POST['name'] ?? '';
$bild = $_POST['bild'] ?? '';
$note = $_POST['note'] ?? '';
$titel = $_POST['titel'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($name);
    $note = trim($note);
    $titel = trim($titel);

    if ($name === '') {
        $errors[] = 'Bitte geben Sie einen Namen ein.';
    }
    if ($note === '') {
        $errors[] = 'Bitte geben Sie Text ein.';
    }
    if ($titel === '') {
        $errors[] = 'Bitte geben Sie einen Titel ein.';
    }
}
?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Formular</title>
    <link rel="stylesheet" href="../CSS/formular.css">
    <link rel="stylesheet" href="../CSS/navigatorstyle.css">

</head>

<body>
    <main>
        <header>
            <?php include 'navigation.php' ?>
        </header>
        <div class="wrapper">
            <h1 class="form-title">Blog erstellen</h1>

            <?php if (count($errors) > 0) { ?>
                <div class="error-box">
                    <ul>
                        <?php foreach ($errors as $error) { ?>
                            <li><?= $error ?></li>
                        <?php } ?>
                    </ul>
                </div>
            <?php } ?>


            <p class="mitte">Hier können sie Ihren eigenen Blog erstellen.</p>

            <div class="middle">
                <br>

                <form action="blog_erstellen.php" method="post">

                    <div class="form-group">
                        <label class="form-label" for="name">*Ihr Name</label><br>
                        <input class="form-control" type="text" id="name" name="name" value="<?= $name ?? '' ?>">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="name">*Titel</label><br>
                        <input class="form-control" type="text" id="name" name="name" value="<?= $name ?? '' ?>">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="bild">Ihr Bild URL</label><br>
                        <input class="form-control" type="text" id="bild" name="bild" value="<?= $bild ?? '' ?>">
                    </div>

                    <div class="form-group">
                        <label for="note" class="form-label">*Ihr Text</label><br>
                        <textarea name="note" id="note" rows="3" class="form-control"></textarea>
                    </div>

                    <div class="form-actions">
                        <input class="btn btn-primary" type="submit" value="Hochladen">
                        <a href="http://localhost/Mein_Blog/HTML/index.php" class="btn">Entwurf Abbrechen</a>
                    </div>
            </div>
            </form>
        </div>
    </main>
</body>

</html>