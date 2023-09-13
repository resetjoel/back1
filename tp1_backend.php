<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Backend</h1>
    <?php
    // 1. Imprima por pantalla: “Hola mundo”.
    print "Hola mundo <br>";

    //2. Cargue en una variable la cadena de caracteres “Hola mundo” y luego la imprima por pantalla.
    $titulo = "Hola mundo <br>";
    print $titulo;

    //3. Crear dos variables enteras y mostrar por pantalla, la suma, la resta, la multiplicación, la división entera y el resto de la división entera.
    $primerNumero = 26;
    $segundoNumero = 22;

    $suma = $primerNumero + $segundoNumero;
    $resta = $primerNumero - $segundoNumero;
    $multiplicacion = $primerNumero * $segundoNumero;
    $division = $primerNumero / $segundoNumero;
    $divisionEntero = (int)$division;
    $resto = $primerNumero % $segundoNumero;

    print "La suma de $primerNumero y $segundoNumero es = $suma <br>";
    print "La resta de $primerNumero y $segundoNumero es = $resta <br>";
    print "La multiplicacion de $primerNumero y $segundoNumero es = $multiplicacion <br>";
    print "La division de $primerNumero y $segundoNumero es = $divisionEntero <br>";
    print "El resto de la division entre $primerNumero y $segundoNumero es = $resto <br>";

    //4. Realizar la transformación de grados Celsius a Fahrenheit, para el valor 20°C y luego lo imprima por pantalla.
    $celsius = 20;

    $fahrenheit = ($celsius * 9/5) + 32;

    print "$celsius °C es igual a $fahrenheit °F <br>";

    //5. Implementar algoritmos que permitan:
    //a) Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm.
    $baseRectangulo = 18;
    $alturaRectangulo = 12;

    $perimetroRectangulo = 2 * ($baseRectangulo + $alturaRectangulo);
    $areaRectangulo = $baseRectangulo * $alturaRectangulo;

    print "Rectángulo: ";
    print "Perímetro: $perimetroRectangulo cm ";
    print "Área: $areaRectangulo cm² <br>";

    //b) Calcular el perímetro y el área de un círculo dado que su radio es de 30cm
    $radioCirculo = 30;
    $pi = 3.14159265359;

    $perimetroCirculo = 2 * $pi * $radioCirculo;

    $areaCirculo = $pi * ($radioCirculo * $radioCirculo);

    print "Círculo: ";
    print "Perímetro: $perimetroCirculo cm ";
    print "Área: $areaCirculo cm² ";

    ?>
</body>
</html>