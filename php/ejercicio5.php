<?php
$saludo = "Hola Mundo";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Ejercicio 5</title>
</head>

<body>
    <?php

    if (isset($_POST['calcular'])) {
        $tipoenf = intval($_POST['tipoenf']);
        $edad = intval($_POST['edad']);
        $dias = intval($_POST['dias']);
        $costot = 0;
        $costo_dia = 0;
        if ($tipoenf >= 1 && $tipoenf < 5) {
            switch ($tipoenf) {
                case 1:
                    $costo_dia = 25;
                    break;
                case 2:
                    $costo_dia = 16;
                    break;
                case 3:
                    $costo_dia = 20;
                    break;
                case 4:
                    $costo_dia = 32;
                    break;
            }
            $costot = $costo_dia * $dias;
            if ($edad <= 14  &&  $edad >= 22) {
                $costot *= 1.10;
            } else {
                $costot;
            }
        }
    }


    ?>
    <div class="cabecera">
        <H1 class="title"> Ejercicio 5 </H1>
    </div>
    <div class="formulario">

        <form method="post" class="form_container">
            <div class="item">
                <label for="nombre"> Tipo de enfermedad : </label>
                <select type="number" name="tipoenf" id="tipoenf">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>

            <div class="item">
                <label for="nombre"> Edad del pacientes: </label>
                <input type="number" name="edad" id="edad" placeholder="Edad">
            </div>
            <div class="item">
                <label for="nombre"> Cantidad de dias hopitalizado: </label>
                <input type="number" name="dias" id="dias" placeholder="Número de dias">
            </div>
            <input type="submit" name="calcular" value="calcular">
        </form>
    </div>
    </div>

    <div class="resultado">
        <h2> costo total a pagar del paciente . </h2>
        <p>
            <?php
            if (isset($_POST['calcular'])) {
                echo "Dias Hozpitalizado : " . $dias . "<br>";
                echo "Costo total : $" . number_format($costot, 2) . "mxn <br>";
            }
            ?>
        </p>
    </div>


    <div class="back_home">
        <a class="btn_back" href="../index.html">volver al menu</a>
    </div>
</body>

</html>