<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css">
    <title>Exercice 2 Partie 2 PHP</title>
  </head>
  <body>
  <?php
  $isEasy = false;
  // Si $isEasy est égal à true
  echo 'le contenu de ma variable $isEasy est ' . $isEasy . '<br />';
  if ($isEasy == true) {
    echo 'C\'est facile!!';
  }
  // Sinon
  else {
    echo 'C\'est difficile!!';
  }
  ?>
  </body>
</html>
