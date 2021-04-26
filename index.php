<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>Kezdőoldal</title>
</head>
<body>
    <h1>Teszt oldalam</h1>
    <form action="belepes.php" method="POST">
        Felhasználónév:
        <input type="text" name="nev" required>
        <br>
        Jelszó:
        <input type="password" name="pw" required>
        <br>
        <input type="submit" value="Mehet">
    </form>
    <?php
        echo "<b>Ezt a php írja </b>ki az oldalra";
    ?>
    <p id="java"></p>
    <script>
        document.getElementById('java').innerHTML="Ezt a javascript írja ki";
    </script>
</body>
</html>
