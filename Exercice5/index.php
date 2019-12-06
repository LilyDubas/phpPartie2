<?php
$gender = "femme";
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>PHP</title>
</head>
<body>
  <div class="jumbotron m-auto text-center">
    <h1></h1>
    <?php
    if($gender=="homme"){
      echo "C'est un développeur";
    }
    elseif ($gender=="femme") {
      echo "C'est une développeuse";
    }
     ?>
  </div>
</body>
</html>
