<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>tp1</title>
  </head>
  <body>
    <h1>Ejercicios del TP1</h1><br><hr>
    <h2>Ejercicio 1</h2>
    <?php
    echo "Hola mundo";
    ?>
    <br><hr>

    <h2>Ejercicio 2</h2>
    <?php
    $saludo = "Hola Mundo";
    echo $saludo;
    ?>
    <br><hr>

    <h2>Ejericio 3</h2>
    <?php
    $variable1 = 150;
    $variable2 = 35;
    echo $variable1 + $variable2."\n";
    echo $variable1 - $variable2."\n";
    echo $variable1 * $variable2."\n";
    echo $variable1 / $variable2."\n";
    echo $variable1 % $variable2."\n";
    ?>
    <br><hr>

    <h2>Ejercico 4</h2>
    <?php
    $celsius = 20;
    $farenheit = ($celsius * 1.8) + 32;
    echo $farenheit;
    ?>
    <br><hr>

    <h2>Ejercico 5</h2>
    <?php
    $base = 18;
    $altura = 12;
    $radio = 30;
    echo "Perimetro Rectangulo"."\n";
    echo 2 * ($base + $altura)."\n";
    echo "Area Rectangulo"."\n";
    echo $base * $altura."\n";
    echo "Perimetro Circulo"."\n";
    echo 2 * $radio * 3.1416."\n";
    echo "Area Circulo"."\n";
    echo ($radio * $radio) * 3.1416."\n";
    ?>




  </body>
</html>
