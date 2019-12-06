<?php
$ok = false;
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
    <h1>How old?</h1>
    <?php
    if($ok == false){
      echo "Ce n'est pas bon!";
    }
    else {
      echo "Tout est OK!";
    }
     ?>
  </div>
</body>
</html>
