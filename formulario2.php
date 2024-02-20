<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Estilo1.css" type="text/css">
    <title>Registro de Pacientes - Veterinaria</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <?php
        $nombreDueno = $nombreMascota = $especie = $raza = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            // Validación para el nombre del dueño
            if (empty($_POST["nombreDueno"])) {
                $errorNombreDueno = "Por favor, ingrese el nombre del dueño";
            } else {
                $nombreDueno = validar($_POST["nombreDueno"]);
            }

            // Validación para el nombre de la mascota
            if (empty($_POST["nombreMascota"])) {
                $errorNombreMascota = "Por favor, ingrese el nombre de la mascota";
            } else {
                $nombreMascota = validar($_POST["nombreMascota"]);
            }

            // Validación para la especie
            if (empty($_POST["especie"])) {
                $errorEspecie = "Por favor, seleccione la especie de la mascota";
            } else {
                $especie = validar($_POST["especie"]);
            }

            // Validación para la raza
            if (empty($_POST["raza"])) {
                $errorRaza = "Por favor, ingrese la raza de la mascota";
            } else {
                $raza = validar($_POST["raza"]);
            }
        }

        function validar($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>

    <form method="post" action="#">
        <table width="300" border="1" align="center">
            <tbody>
                <tr>
                    <td>INGRESE PACIENTE</td>
                    <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Nombre del Dueño:</td>
                    <td colspan="3"><input type="text" name="nombreDueno"><span class="error">* <?php echo isset($errorNombreDueno) ? $errorNombreDueno : "";?></span></td>
                </tr>
                <tr>
                    <td>Nombre de la Mascota:</td>
                    <td colspan="3"><input type="text" name="nombreMascota"><span class="error">* <?php echo isset($errorNombreMascota) ? $errorNombreMascota : "";?></span></td>
                </tr>
                <tr>
                    <td>Especie:</td>
                    <td colspan="3">
                        <select name="especie">
                            <option value="" selected disabled>Seleccionar</option>
                            <option value="Perro">Perro</option>
                            <option value="Gato">Gato</option>
                            <option value="Otro">Otro</option>
                        </select>
                        <span class="error">* <?php echo isset($errorEspecie) ? $errorEspecie : "";?></span>
                    </td>
                </tr>
                <tr>
                    <td>Raza:</td>
                    <td colspan="3"><input type="text" name="raza"><span class="error">* <?php echo isset($errorRaza) ? $errorRaza : "";?></span></td>
                </tr>
                <tr>
                    <td>Edad:</td>
                    <td><input type="text" name="edad"></td>
                    <td>Color:</td>
                    <td><input type="text" name="color"></td>
                </tr>
                <tr>
                    <td colspan="2">Observaciones:</td>
                    <td colspan="2"><textarea name="observaciones" rows="3" cols="30"></textarea></td>
                </tr>
                <tr>
                    <td colspan="4">
                        <input type="submit" value="Registrar">
                        <input type="reset" value="Limpiar">
                    </td>
                </tr>
            </tbody>
        </table>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Mostrar la información ingresada en una tabla
            echo "<table width='300' border='1' align='center'>";
            echo "<tbody>";
            echo "<tr><td colspan='2'>INFORMACIÓN DEL PACIENTE</td></tr>";
            echo "<tr><td>Nombre del Dueño:</td><td>$nombreDueno</td></tr>";
            echo "<tr><td>Nombre de la Mascota:</td><td>$nombreMascota</td></tr>";
            echo "<tr><td>Especie:</td><td>$especie</td></tr>";
            echo "<tr><td>Raza:</td><td>$raza</td></tr>";
            echo "</tbody></table>";
        }
    ?>
</body>
</html>