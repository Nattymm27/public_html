<!DOCTYPE html>
<html>
<head>
    <title>Tabla de Divisores</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Divisores números entre (50-60)</h1>
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
        for ($fila = 1; $fila <= 10; $fila++) {
            echo "<tr class='" . ($fila % 2 == 0 ? 'even-row' : 'odd-row') . "'>";
            echo "<td class='first-column'>$fila</td>";
            for ($col = 50; $col <= 60; $col++) {
                echo "<td>";
                    if ($col % $fila ==0) {
                        echo "*";
                    } else {
                        echo "_";
                    }
                echo "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>


