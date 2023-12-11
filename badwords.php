<?php 
$text = $_GET["text"];
$badword = $_GET["badword"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $length = strlen($text);
    ?>

    <h2>Il testo originale é lungo <?php echo $length; ?> caratteri</h2>

    <p><?php echo $text ?></p>

    <?php
    $new_text = str_replace($badword, '***', $text);
    ?>

    <?php
    $new_length = strlen($new_text);
    ?>

    <h2>Il nuovo testo é lungo <?php echo $new_length; ?> caratteri</h2>

    <p><?php echo $new_text; ?></p>
</body>
</html>