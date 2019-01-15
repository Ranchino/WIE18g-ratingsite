<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beskrivning</title>
    <link rel="stylesheet" href="./styles.css">

</head>
<body>
    <?php
        include "header.php";
    ?>
    <div class="container">
        <div class="start">
            <a href=index.php>Start!</a><br>
        </div>
        <div class="info">
            <a href=kontakt.php>Kontakta!</a>
        </div>
    </div>

    <?php
    include "beskrivning.php";
    ?>

    <?php
        include "footer.php";
    ?>
</body>
</html>