<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>Belépés</title>
</head>
<body>
  <div class="container">
  <div class="row">
    <div class="col-sm">
      <h1>Ez lesz a belépés oldalam</h1>
      <p>
          Ez a belépési neved:
          <?php
          echo $_POST['nev'];
          ?>
          <br>
          Ez a jelszavad:
          <?php
          echo $_POST['pw'];
      ?>
      </p>
      <div class="">
        <?php
        require('sql_conn.php');
        ?>
        <table class="table table-hover">
          <tr>
            <th>Ország</th>
            <th>Főváros</th>
            <th>Földrajzi hely</th>
          </tr>
          <?php
          require('lekerdezes.php');
          ?>
        </table>



        <?php
        require('sql_close.php');
        ?>
      </div>






      <a href="index.php">Vissza</a>
    </di>
  </div>
</div>

</body>
</html>
