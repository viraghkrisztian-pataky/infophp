<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ez lesz a belépés oldalam</h1>
    <p>
        Beléptél, mint: 
        <?php
        echo($_POST['nev']);
    ?><br>
    És jelszavad:
    <?php
        echo($_POST['pw']);
    ?>
    </p>
    <a href="index.php">Vissza</a>
    
</body>
</html>