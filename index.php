<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dimmi una frase e la parola da eliminare</h1>

        <form action="badwords.php" method="GET">
        <label for="text">Frase</label>
        <input type="text" id="text" name="text">

        <label for="badwords">Parola da eliminare</label>
        <input type="text" id="badwords" name="badwords">

        <button type="submit">Invia</button>
    </form>
</body>
</html>