<?php

    $num1"Sueteres";
    $num2"Disfraces";
    $num3"Juguetes";
    $num4"Accesorios";
    if ($_POST)
    {
        $num1 = $_POST [ "Sueteres" ];
        $num2 = $_POST [ "Disfraces" ];
        $num3 = $_POST [ "Juguetes" ];
        $num4 = $_POST [ "Accesorios" ];

    }
  if ($_POST)
  {
      $SUMA = $num1 + $num2 + $num3 + $num4;
      echo "la suma de ".$num1. .$num2. .$num3. "y" $num4 " es" $SUMA;

  }
  ?>
  