<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <?php
    require_once "connexion.php"; 
    require_once "index.php";
    ?>
  </head>
  <body>

    <h2>Welcome <?= $username; ?></h2>

  </body>
</html>
