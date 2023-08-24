<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tareas simples</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="row bg-primary text-white p-3">
        <div class="row">
            <div class="col-sm-8 d-flex align-items-center">
                <h1>Tareas</h1>
            </div>
            <div class="col-sm-4 d-flex align-items-center justify-content-end">
                <button type="button" class="btn btn-sm btn-success">+</button>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="row mt-3">
            <form method="post" id="enviarTarea">
                <div class="input-group">
                    <input type="text" class="form-control" id="tareaContenido" placeholder="Escribe una tarea para agregarla...">
                    <button type="submit" class="btn btn-success">Agregar</button>
                </div>
            </form>
        </div>

        <div class="row mt-3">
            <ul class="list-group" id="tareas"></ul>
        </div>


    </div>
    <script src="./js/tarea.js"></script>
</body>

</html>