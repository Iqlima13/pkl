<?php
include("../koneksi.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include("./komponen/head.html"); ?>
</head>

<body>

  <div class="container">
    <?php
    // include("./admin.php");
    if (empty($_SESSION['username'])) {
      include("./konten/login.php");
    } else {
      include("./atur-konten.php");
    }
    ?>
    
  </div>

</body>

</html>