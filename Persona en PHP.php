<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!--Trabajo de Itamar Keydar DAW2-->

<body>
    <?php
    $nom = "Kurt";
    $cognom= "Cagle";
    $edat= 40;
    $dataNaix= date_create();
    date_date_set($dataNaix,1983,05,12);
    $telf= array(654332211, 933332211);
    $adre="Carrer de turin, 15";
    $mail= "kurt.cagle@example.com";
    $work=  true;
    $altura= 1.67;
    ?>
    
    <h1><?php 
    //Titulo del Html
        echo "Descrivint a " . $nom . " " . $cognom;
    ?></h1>
    <h2>
        <?php
    //Subtitulo
        echo "Les dades de " . $nom . " " . "son:"; 
        ?>
    </h2>
    <!--Datos de la persona !-->
    <ul>
        <li>
            <?php echo "Es diu. " . $nom;?>
        </li>
        <li>
            <?php echo "Te: ". $edat . " anys" ;?>
        </li>
        <li>
            <?php echo "Va neixer l'any: "?>
            <b><?php echo date_format($dataNaix, 'Y-m-n');?></b>
        </li>
        <li>
            <?php echo "Els seus telefons son:". $telf[0] . " - " . $telf[1] ;?>
        </li>
        <li>
            <?php echo "Viu a: ". $adre ;?>
        </li>
        <li>
            <?php echo "El seu email és: " . $mail ;?>
        </li>
        <li>
            <?php
            echo "Treballa: ";
            echo $work ? "si" : "no";
            ?>
        </li>
        <li>
            <?php echo "I medeix: " . $altura ;?>
        </li>

    </ul>
</body>
</html>