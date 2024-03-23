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
           Dados tres numeros enteros (x,y,z) calcular h(x, y, z) dadas las siguientes funciones:

           <ul>
                    <p>f(a) = 4a¨3 + g(2a, -3a),</p>
                    <p>g(b,c) = (7b - 3) mod (c¨2 + 1),</p>
                    <p>h(x,y,z) = f(x/y) + 3g(z/y , x).</p>
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
                <td colspan = "2">-10 -4 18</td>
                <td colspan = "2"><center>-36</center></td>
            </tr>
        </table>
    </div>
</div>



<div class="Fondo-Problema">
    <div class="Solucion">
        <h1>Insercion de Datos</h1>
            <form action="" method="post">
                Valor de x:
                <input type="text" name="txtX"><br><br>

                Valor de y:
                <input type="text" name="txtY"><br><br>

                Valor de z:
                <input type="text" name="txtZ"><br><br>

                <br>

                <input type="submit" name="">
            </form>
    </div>
</div>


<?php

    if($_POST)
    {
            function g($b, $c) {
                return (7*$b - 3) % ($c*$c + 1);
            }

            function f($a) {
                return 4*pow($a, 3) + g(2*$a, -3*$a);
            }

            function h($x, $y, $z) {
                $result_f = f($x/$y);
                $result_g = 3 * g($z/$y, $x);
                return $result_f + $result_g;
            }

            // Ejemplo de uso
            $x = $_POST["txtX"];
            $y = $_POST["txtY"];
            $z = $_POST["txtZ"];

            echo "<h1>El valor de H es:</h1>" . h($x, $y, $z);
    }

?>




</body>
</html>