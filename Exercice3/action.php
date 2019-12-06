
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
      Bonjour, vous êtes un.e <?php echo htmlspecialchars($_POST['gender']); ?>.
      Vous avez <?php echo (int)$_POST['age']; ?> ans
      <?php if (isset($gender) && $gender=="feme") echo "checked";?>
      <?php if (isset($gender) && $gender=="homme") echo "checked";?>
  
    </div>
    </body>
</html>
