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
      <!-- affiche le genre. "htmlspecialchars" perlet d'afficher les caractères spéciaux -->
      Bonjour, vous êtes un.e <?php echo htmlspecialchars($_POST['gender']); ?>.
      <?php if (isset($gender) && $gender=="femme") echo "checked"; //verifie la checkbox
            if (isset($gender) && $gender=="homme") echo "checked";
            // boucle pour savoir si on affiche mineur ou majeur
            if (!is_nan($_POST['age']) && ($_POST['age'] >= 18) {
              echo "Vous êtes majeur.e";
            }
            else{
              echo "Vous êtes mineur.e";
            }
            ?>
    </div>
    </body>
</html>
