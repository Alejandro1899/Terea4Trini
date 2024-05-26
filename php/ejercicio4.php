<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Ejercicio 4</title>
</head>

<body>
    <?php

    if (isset($_POST['calcular'])) {
        $sue = floatval($_POST['sue']);
        $cate = intval($_POST['cate']);
        $he = intval($_POST['he']);
        $nsue = 0;
        $phe = 0;

        if ($cate >= 1 && $cate <= 5) {
            switch ($cate) {
                case 1:
                    $phe = 30;
                    break;
                case 2:
                    $phe = 38;
                    break;
                case 3:
                    $phe = 50;
                    break;
                case 4:
                    $phe = 70;
                    break;
                case 4:
                    $phe = 0;
                    break;
            }

            if ($he > 30) {
                $he = 30;
            }

            $phe = $phe * $he;
            $nsue = $sue + $phe;
        } else {
            $nsue = $sue;
        }
    }


    ?>
    <div class="cabecera">
        <H1 class="title"> Ejercicio 4 </H1>
    </div>
    <div class="formulario">

        <form method="post" class="form_container">

            <div class="item">
                <label for="nombre"> Ingrese sueldo del trabajador: </label>
                <input type="number" name="sue" id="sue" placeholder="Sueldo">
            </div>
            <div class="item">
                <label for="nombre"> categoria del trabjador : </label>
                <select type="number" name="cate" id="cate">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <div class="item">
                <label for="nombre"> Ingrese la cantidad de horas extras trabajadas: </label>
                <input type="number" name="he" id="he" placeholder="Horas extras">
            </div>
            <input type="submit" name="calcular" value="calcular">
        </form>
    </div>
    </div>

    <div class="resultado">
        <h2> Sueldo con ajuste de horas extras del trabajador. </h2>
        <p>
            <?php
            if (isset($_POST['calcular'])) {

                echo (" Sueldo: $" . number_format($sue, 2) . " mxn <br>");
                echo ("Categoria del empleado: " . $cate . "<br>");
                echo ("Cantidad de horas extras tabajadas : " . $he . " hrs <br>");
                echo ("Sueldo ajustado: $" . number_format($nsue, 2) . " mxn");
            }
            ?>
        </p>
    </div>

    <div class="back_home">
        <a class="btn_back" href="../index.html">volver al menu</a>
    </div>
</body>

</html>