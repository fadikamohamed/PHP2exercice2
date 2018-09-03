<?php
$isEasy = true;
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 2</title>
  </head>
  <body>
    <p>
    <?php
      if ($isEasy) {
        echo ' C\'est facile!! ';
      } else {
       echo ' C\'est difficile !!! ';
      }

      if ($isEasy == true) {
        echo ' C\'est facile!! ';
      } else {
       echo ' C\'est difficile !!! ';
      }
     ?>
   </p>
  </body>
</html>
