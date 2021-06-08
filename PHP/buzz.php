<?php
  $num = $_POST['max_num']

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>FizBuz</title>
  </head>
  <body>
    <?php
    $number = 0;
    $cycle = 0;
    do {
      if (($number % 3 == 0) and ($number % 5 == 0)) echo "<p>FB</p>";
      else if ($number % 3 == 0) echo "<p>Fiz</p>";
      else if ($number % 5 == 0) echo "<p>Buzz</p>";
      else echo "<p>$number</p>";
      $number += 1;
    } while ($number <= $num)




    ?>
  </body>
</html>
