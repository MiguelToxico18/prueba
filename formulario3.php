<!DOCTYPE html>
<html>
<head>
    <title>Tabla Dinámica</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
    $tables_dinamic = array(
        array("Nombres", "Apellidos", "Celular"),
        array("Jose", "Quispe", "978754556"),
        array("Julio", "Alarcon", "965445334")
    );

    $filas = count($tables_dinamic);
    $columnas = count($tables_dinamic[0]);
    ?>

    <table id="tabla">
        <thead>
            <tr>
                <?php
                for ($j = 0; $j < $columnas; $j++) {
                    echo "<th>" . $tables_dinamic[0][$j] . "</th>";
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 1; $i < $filas; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $columnas; $j++) {
                    echo "<td>" . $tables_dinamic[$i][$j] . "</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>