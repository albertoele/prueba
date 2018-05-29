<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      include 'db.php';

      $prueba=new db();

      echo $prueba->estadoConexion();

      echo $prueba->generaPass("copon");

    ?>
  </body>
</html>
