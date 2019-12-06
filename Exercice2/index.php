<?php
$isEasy = true;
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
		<h1>Easy or not easy?</h1>
		<?php
    if($isEasy == true){
      echo "ça marche bien! &#x1F603";
    }
    else{
      echo "C'est difficile! &#128556";
    }
		?>
	</div>
	</body>
</html>
