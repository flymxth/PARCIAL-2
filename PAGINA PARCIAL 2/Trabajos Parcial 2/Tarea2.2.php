<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="Titulo">PARCIAL 2</h1>
    
    <div class="Buttons">
        <button>
            <a href="Inicio.html">Inicio</a>
        </button>
        <button>
            <a href="Tarea2.1.php">tarea2.1</a>
        </button>
        <button>
            <a href="Tarea2.2.php">tarea2.2</a>
        </button>
    </div>

    

    <div class="Fondo">
        <h1>Indicaciones Problema:</h1>
        <p>
            Evaluar de forma correcta F(X) dado el valor de X.

           <ul>
                <p>F(X) = {x2 - x para x <= 0.0           -x2 + 3x para x > 0}</p>
           </ul>
        </p>
    </div>



<div class="Fondo-Tabla">
    <div class="Tb-Problema">
        <h1>Casos de prueba:</h1>
        <table border = "1">
            <th colspan = "2">Inicio</th>
            <th colspan = "2">Salida</th>

            <tr>
                <td colspan = "2">-78</td>
                <td colspan = "2"><center>6162</center></td>
            </tr>

            <tr>
                <td colspan = "2">28</td>
                <td colspan = "2">-700</td>
            </tr>
        </table>
    </div>
</div>



<div class="Fondo-Problema">
    <div class="Solucion">
        <h1>Insercion de Datos</h1>
            <form action="" method="post">

                Ingresar numero:
                <input type="text" name="txtNumero"><br><br>

                <br>

                <input type="submit" name="">
            </form>
    </div>
</div>


<?php

    if($_POST)
    {
        function f($x){
            if($x <= 0.0){
                return $x * $x - $x;
            } else if($x > 0){
                return -$x * $x + 3 * $x;
            }
        }

        $Numero = $_POST["txtNumero"];
        echo "<h1>EL RESULTADO DE F(X) ES:</h1>" . f($Numero);
    }

?>

<br>
<br>

<div class="Fondo">
        <h1>Indicaciones Problema:</h1>
        <p>
            Dado el valor de cada palabra calcular la suma de las letras.
        </p>
</div>


<div class="Fondo-Tabla">
    <div class="Tb-Problema">
        <h1>Casos de prueba:</h1>
        <table border = "1">
            <th colspan = "2">Inicio</th>
            <th colspan = "2">Salida</th>

            <tr>
                <td colspan="2">UAM</td>
                <td colspan="2">15</td>
            </tr>
        </table>
    </div>
</div>


<div class="Fondo-Problema">
    <div class="Solucion">
        <h1>Insercion de Datos</h1>
            <form action="" method="post">

                Ingresa la palabra:
                <input type="text" name="txtPalabra"><br><br>

                <br>

                <input type="submit" name="">
            </form>
    </div>
</div>

<?php

function calcular_valor_palabra($palabra) {
    $valores = array('QAZ' => 1, 'WSX' => 2, 'EDC' => 3, 'RFV' => 4, 'TGB' => 5, 'YHN' => 6, 'UJM' => 7, 'IK' => 8, 'OL' => 9, 'P' => 10);
    $valor = 0;
    $letras = str_split($palabra);
    foreach ($letras as $letra) {
        foreach ($valores as $teclas => $val) {
            if (strpos($teclas, $letra) !== false) {
                $valor += $val;
                break;
            }
        }
    }
    return $valor;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $palabra = isset($_POST["txtPalabra"]) ? trim($_POST["txtPalabra"]) : "";

    if (!empty($palabra)) {
        $valor_palabra = calcular_valor_palabra($palabra);
        echo "<h1>El valor de la palabra es :</h1> $valor_palabra";
    }
}

?>

</body>
</html>