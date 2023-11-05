<!DOCTYPE html>
<html>
<head>
    <title>Tabla formulario</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Resultado de Divisores</h1>
<?php
    function recupera()  {
        $xnumero1 = $_REQUEST['xnumero1'];
        $xnumero2 = $_REQUEST['xnumero2'];
        if ($xnumero2 > ($xnumero1 + 19)) {
            echo "numero entre 1 a 20";
            exit(1);
        }
        return[$xnumero1, $xnumero2];
    }
    $valores = recupera();
    $xnumero1 = $valores[0];
    $xnumero2 = $valores[1];
?>
    <table>
        <tr>
            <th class="first-row"></th>
            <?php
            for ($columna = 50; $columna <= 60; $columna++) {
                echo "<th class='first-column'>$columna</th>";
            }
            ?>
        </tr>

        <?php
        for ($fila = $xnumero1; $fila <= $xnumero2; $fila++) {
            echo "<tr class='" . ($fila % 2 == 0 ? 'even-row' : 'odd-row') . "'>";
            echo "<td class='first-column'>$fila</td>";
            for ($col = 50; $col <= 60; $col++) {
                echo "<td>";
                    if ($col % $fila ==0) {
                        echo "*";
                    } else {
                        echo "-";
                    }
                echo "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>