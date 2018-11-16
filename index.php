<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
$number1 = 0;
$number2 = rand(1, 100);
while ($number1 <= 20){
  echo $number1 * $number2 . "->" . $number1 . "<br>";
  $number1++;
}
     ?>
  </body>
</html>
