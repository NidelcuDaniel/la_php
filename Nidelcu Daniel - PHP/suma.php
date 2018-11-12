<?php
  echo 'Introduceti primul numar: '.PHP_EOL;
  $primulnumar = readline();
  echo "Numar introdus: $primulnumar".PHP_EOL;
  echo 'Introduceti al 2-lea numar: '.PHP_EOL;
  $doinumar = readline();
  echo "Numar introdus: $doinumar".PHP_EOL;
  echo "Numerele introduse: $primulnumar + $doinumar".PHP_EOL;
  $sum = $primulnumar + $doinumar;
  echo "R: $sum".PHP_EOL;
?>
