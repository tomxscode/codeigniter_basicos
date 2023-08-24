document.getElementById('enviarTarea').addEventListener('submit', function(evt) {
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
                listaTareas.innerHTML += `<li class="list-group-item">${datos.tarea}</li>`
            }
        }
        xhr.send('tarea-input=' + encodeURIComponent(contenido));
    }
})