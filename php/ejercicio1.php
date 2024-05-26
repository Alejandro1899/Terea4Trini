<?php
/*
 Elabora  un script PHP para calcular el precio de un billete de ida y vuelta en
 ferrocarril, conociendo la distancia del viaje de ida y el tiempo de estancia.
 Se sabe, además, que si el número de días de estancia es superior a 7 y 
 la distancia total (ida y vuelta) a recorrer es superior a 800 Km, el billete 
 tiene una reducción de 30%. El precio por Km es de $0.17.  
 */
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Ejercicio 1</title>
</head>

<body>

    <?php
    if (isset($_POST['calcular'])) {
        $dist  = $_POST['dist'];
        $tiem  = $_POST['tiem'];
        $km = 0.17;
        $dist_total = $dist * 2;
        $costo = ($dist_total * $km);
    }
    ?>

    <div class="cabecera">
        <H1 class="title"> Ejercicio 1 </H1>
    </div>

    <div class="formulario">
        <form method="post" class="form_container">
            <div class="item">
                <label for="nombre">Distancia de ida : </label>
                <input type="number" id="dist" name="dist" placeholder="Distancia en Kilometros">
            </div>
            <div class="item">
                <label for="nombre">Dias de estancia : </label>
                <input type="number" id="tiem" name="tiem" placeholder="Cantidad de dias">
            </div>

            <input type="submit" name="calcular" value="calcular">
        </form>

    </div>

    <div class="resultado">
        <h2> Costo del boleto :
        </h2>
        <p>
            <?php
            if (isset($_POST['calcular'])) {
                if (($tiem > 7)  &&  ($dist_total > 800)) {
                    $desc = $costo * 0.30;
                    $costo_desc = $costo - $desc;
                    echo ("$" . $costo_desc . " pesos mxn");
                } else {
                    echo ("$" . $costo . " pesos mxn");
                }
            }
            ?>
        </p>
    </div>

    <div class="back_home">
        <a class="btn_back" href="../index.html">volver al menu</a>
    </div>

</body>

</html>