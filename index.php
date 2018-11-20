<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Exercice2</title>
</head>
<body>
  <p>Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.
    Tant que la première variable n'est pas supérieure à 20 :</p>
    <ul>
      <li>multiplier la première variable avec la deuxième</li>
      <li>afficher le résultat</li>
      <li>incrementer la première variable</li>
    </ul>
    <!-- on défini la variable number1 à zéro, et on choisi une valeuraléatoire entre 1 et 100 pour number2.
    on utilise while pour faire une boucle, on dit que la boucle doit continuer tant que $number1 n'arrive pas a 20
    on mutiplie les nombre ensemble et on incremente $number1 -->
    <?php
    $count = 0;
    $random = rand(1, 100);
    while ($count <= 20){ ?>
      <p> <?php echo $count * $random . '->' . $count ?> </p>
      <?php $count++;
    } ?>
    <a href="http://PHP/"><button type="button" class="btn btn-danger" name="button">Accueil</button></a>
  </body>
  </html>
