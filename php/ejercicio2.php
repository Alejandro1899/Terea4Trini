<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Ejercicio 2</title>
</head>

<body>
    <?php
    if (isset($_POST['calcular'])) {

        $compra = floatval($_POST['compra']);
        $pagar = 0;


        if ($compra < 500) {
            $pagar = $compra;
        } elseif ($compra >= 500 && $compra < 1000) {
            $pagar = $compra * 0.95;
        } elseif ($compra >= 1000 && $compra < 7000) {
            $pagar = $compra * 0.89;
        } elseif ($compra >= 7000 && $compra < 15000) {
            $pagar = $compra * 0.82;
        } elseif ($compra >= 15000) {
            $pagar = $compra * 0.75;
        }
    }
    ?>

    <div class="cabecera">
        <H1 class="title"> Ejercicio 2 </H1>
    </div>

    <div class="formulario">
        <form method="post" class="form_container">
            <div class="item">
                <label for="nombre">Monto de compra : </label>
                <input type="number" id="compra" name="compra" placeholder="Valor de la compra ">
            </div>

            <input type="submit" name="calcular" value="calcular">
        </form>
    </div>

    <div class="resultado">
        <h2> Valor de la compra </h2>
        <p>
            <?php
            if (isset($_POST['calcular'])) {

                echo " $" . number_format($compra, 2) . "<br>";
                echo "Monto a pagar con descuento: $" . number_format($pagar, 2);
            }
            ?>
        </p>
    </div>

    <div class="back_home">
        <a class="btn_back" href="../index.html">volver al menu</a>
    </div>

</body>

</html>