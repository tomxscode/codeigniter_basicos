document.getElementById('enviarTarea').addEventListener('submit', function (evt) {
    evt.preventDefault();
    let contenido = document.getElementById('tareaContenido').value;
    console.log(contenido)
    // Comprobar que no esté vacia
    if (contenido.trim() !== '') {
        let xhr = new XMLHttpRequest();
        xhr.open('POST', 'http://localhost/codeigniter_basicos/public/tareas/add_tarea', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                let datos = JSON.parse(xhr.responseText);
                console.log(datos);
                let listaTareas = document.getElementById("tareas");
                listaTareas.innerHTML += `
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span>${datos.tarea}</span>
                        <div>
                            <button type="button" class="btn btn-success">Listo</button>
                            <button type="button" class="btn btn-warning">Editar</button>
                            <button type="button" class="btn btn-danger">Borrar</button>
                        </div>
                    </li>
                    `
            }
        }
        xhr.send('tarea-input=' + encodeURIComponent(contenido));
    }
})