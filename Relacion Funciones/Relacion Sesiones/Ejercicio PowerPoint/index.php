<?php 
session_start();

  if (isset($_POST["aceptar"])) {
      $_SESSION["cont"]=0;
    }

  if (!isset($_SESSION["cont"])) {
    $_SESSION["cont"]=1;
  }else {
      $_SESSION["cont"]++;
    }
    
    
    echo $_SESSION["cont"];
?>
<html>
  <body>
    <form action="" method="post">
    <input type="submit" name="aceptar">
  </form>
  </body>
</html>