<?php
   $name = $_POST['name'];
   $year = $_POST['year'];
   $mon = $_POST['mon'];
   $day = $_POST['day'];
   $age = 2016 - $year + 1;
?>

<h2>Wow!</h2>
I know you, <?=$name?>!!<br>
Your birthday is <?=$year?>-<?=$mon?>-<?=$day?><br>
you are <?=$age?> years old.
