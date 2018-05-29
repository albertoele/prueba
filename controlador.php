<?php
include 'usuario.php';

if (isset($_POST["accion"])) {
  $usuario=new usuario();

  if ($_POST["accion"]=="login") {

    $resultado=$usuario->devuelveUsuario($_POST["usuario"]);
    if ($resultado!=null) {
      foreach ($resultado as $key) {
        $cifrado=$key["password"];
      }

      if (password_verify($_POST["pass"], $cifrado)) {
        echo "Conseguido";
      } else {
        ?>
        <script type="text/javascript">
          alert("la contraseña no coincide");
          window.location.href='index.php';
        </script>
        <?php
      }

    } else {
      ?>
      <script type="text/javascript">
        alert("El usuario no existe");
        window.location.href='index.php';
      </script>
      <?php
    }


  }
}
?>
