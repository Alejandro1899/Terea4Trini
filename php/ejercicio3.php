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
    <title>Ejercicio 3</title>
</head>

<body>
    <div class="cabecera">
        <H1 class="title"> Ejercicio 3 </H1>
    </div>


    <?php
    if (isset($_POST['calcular'])) {

        $med = $_POST['med'];
        $opcion = $_POST['opcion'];
        $conv = 0;


        switch ($opcion) {
            case "1":
                $conv = $med * 25.40;
                $resultado = $med . " pulgadas es igual a : " . $conv . " milímetros";
                break;
            case "2":
                $conv = $med * 0.914;
                $resultado = $med . " yardas es igual a : " . $conv . " metros";

                break;
            case "3":
                $conv =  $med * 1.6093;
                $resultado = $med . " millas es igual a : " . $conv . " kilómetros";
                break;
        }
    }
    ?>
    <div class="formulario">
        <form method="post" class="form_container">
            <div class="item">
                <label for="nombre"> Seleccione la conversión a realizar : </label>
                <select id="opcion" name="opcion">
                    <option value="1">Pulgadas a milímetros</option>
                    <option value="2">Yardas a metros</option>
                    <option value="3">Millas a kílometros</option>
                </select>
            </div>
            <div class="item">
                <label for="nombre">ingrese la medida </label>
                <input type="number" id="med" name="med" placeholder="mdida para conversion ">

                <input type="submit" name="calcular" value="calcular">
        </form>
    </div>

    <div class="resultado">
        <h2> Resultado de la conversion.</h2>
        <p>
            <?php
            if (isset($_POST['calcular'])) {
                echo $resultado;
            }
            ?>
        </p>
    </div>

    <div class="back_home">
        <a class="btn_back" href="../index.html">volver al menu</a>
    </div>
</body>

</html>