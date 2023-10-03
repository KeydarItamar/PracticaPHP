<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica Itamar</title>

    <!-- Practica 3 por Itamar Keydar / Iteraciones y condicionales/ ej mesas de restaurante -->
</head>

<body>

    <h1>Practica 3</h1>
    <h2>Primera parte: Mesas y comensales </h2>

    <?php
    // creacion del array con el numero aleatorio de comensales.
    $taules = array("");
    for ($x = 0; $x <= 9; $x++) {
        $numeroRandom = random_int(0, 5);
        array_push($taules, $numeroRandom);
    }
    ?>
    <ul>
        <?php
        // Iteracion de mesas con comensales.

        for ($i = 0; $i <= 9; $i++) {
            if ($taules[$i] == 5) {
                ?> <li><?php   echo "la taula $i te está plena"; ?></li>
             <?php } elseif ($taules[$i] == 0) {
             ?> <li> <?php  echo "la taula $i esta buida";?> </li>
                <?php  } else {
                    ?> <li>  <?php  echo " la taula $i te $taules[$i] comensals </li>";
            }
        }
        ?>
    </ul>
    <div>
        <h2>Segunda parte: Pisos y habitaciones: </h2>
        <!-- Segunda parte del ejercicio con pisos y habitaciones.  -->
        <?php
        //    Creacion de la matriz de huespedes por habitacion

        $pisoHabt = array();
        for ($x = 0; $x <= 5; $x++) {
            for ($n = 0; $n <= 9; $n++)
                $pisoHabt[$x][$n] = random_int(0, 5);
        }
        ?>
        <ul>
            <!-- Mostramos por pantalla el resultado -->
            <?php
            for ($i = 0; $i <= 5; $i++) {
                for ($n = 0; $n <= 9; $n++) {
                    if ($pisoHabt[$i][$n] == 5) {
                     ?>  <li> <?php echo "la habitacion $n  de la planta $i está plena"; ?></li>
                    <?php }elseif ($pisoHabt[$i][$n] == 0) {
                       ?><li><?php echo "la habitacion $n de la planta $i esta buida"; ?></li>
                   <?php } else {
                       ?> <li> <?php  echo "la habitacion " . $n . " de la planta " . $i . " te " . $pisoHabt[$i][$n] . " persones";  ?> </li>  
                   <?php }
                } 
            }
          ?>
        </ul>
    </div>

</body>

</html>