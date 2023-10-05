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
<?php
define("IVA", 0.21);
$cursos = array(
    "id" => array(1, 2, 3),
    "nom" => array("PHP", "Laravel", "Django"),
    "Desc" => array("Introduccio a PHP", "Laravel per experts", "Dominant django"),
    "Preu" => array(15.5, 30, 10)
);
echo '<h1>Llista de cursos</h1>';
echo '<h2>Numero de cursos apuntados: 3 </h2>';
for ($i = 0; $i < 3; $i++) {

    echo '<div style="border:1px solid black">';
    echo '<h2>' . $cursos["nom"][$i] . '</h2>';
    echo '<p>' . $cursos["Desc"][$i]. '<p>';
    $calcuIva = $cursos["Preu"][$i] * 0.21; 
   // echo '<p>El preu del llibre amb Iva: '. ($cursos["Preu"][$i]) + $calcuIva . '<p>';
    echo '<p>El preu del llibre amb Iva: ' . ($cursos["Preu"][$i] + $calcuIva) . '</p>';

    echo '</div>';
}
?>
</body>
</html>