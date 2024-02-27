<?php
$user = $_POST["txtUsuario"];
$clave = $_POST["txtClave"];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Animales</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .header h1 {
            margin: 0;
        }

        .decorative-buttons {
            display: flex;
            gap: 10px;
        }

        .decorative-buttons button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="header">
            <h1>Lista de Animales</h1>
        </div>

        <div class="decorative-buttons">
            <button>Nuevo Animal</button>
            <button>Exportar a PDF</button>
            <button>Exportar a Excel</button>
            <button>Cerrar Sesión</button>
        </div>

        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>León</td>
                    <td>5</td>
                    <td>Mamífero</td>
                    <td>
                        <button class="btn btn-primary" onclick="editarAnimal('León', 5, 'Mamífero')">Modificar</button>
                        <button class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>Jirafa</td>
                    <td>7</td>
                    <td>Mamífero</td>
                    <td>
                        <button class="btn btn-primary" onclick="editarAnimal('Jirafa', 7, 'Mamífero')">Modificar</button>
                        <button class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>Tigre</td>
                    <td>4</td>
                    <td>Mamífero</td>
                    <td>
                        <button class="btn btn-primary" onclick="editarAnimal('Tigre', 4, 'Mamífero')">Modificar</button>
                        <button class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>Tortuga</td>
                    <td>50</td>
                    <td>Reptil</td>
                    <td>
                        <button class="btn btn-primary" onclick="editarAnimal('Tortuga', 50, 'Reptil')">Modificar</button>
                        <button class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
                <!-- Puedes agregar más filas de animales según sea necesario -->
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="editarAnimalModal" tabindex="-1" role="dialog" aria-labelledby="editarAnimalModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editarAnimalModalLabel">Editar Animal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" readonly>
                        </div>
                        <div class="form-group">
                            <label for="edad">Edad:</label>
                            <input type="number" class="form-control" id="edad" name="edad" readonly>
                        </div>
                        <div class="form-group">
                            <label for="tipo">Tipo:</label>
                            <input type="text" class="form-control" id="tipo" name="tipo" readonly>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Guardar Cambios</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function editarAnimal(nombre, edad, tipo) {
            document.getElementById('nombre').value = nombre;
            document.getElementById('edad').value = edad;
            document.getElementById('tipo').value = tipo;
            $('#editarAnimalModal').modal('show');
        }
    </script>
</body>

</html>