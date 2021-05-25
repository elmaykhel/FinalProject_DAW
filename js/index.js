window.onload = function(){
    document.getElementById('boton').addEventListener('click', function(){
        axios.get("http://labs.iam.cat/~a16miqboipos/FinalProject_DAW/php/Cliente/mostrarCliente.php", {
            params: {
                nombre: document.getElementById("nombre").value,
                apellidos: document.getElementById("apellidos").value
            }
        })
        .then(function(res){
            console.log(res);
            let ficha = "";
            a = JSON.parse(res.data)
            if(a.dni!=null){
                ficha = `<label>DNI: `+ a.dni +`</label><label>Nombre: `+ a.nombre +`</label><label>Apellidos: `+ a.apellidos +`</label><label>Correo: `+ a.correo +`</label><label>Telefono: </label>`+ a.telefono +`</div>`;
                document.getElementById("ficha").innerHTML = ficha;
            } else {
                console.log("null")
            }
        }).catch(function(error){
            console.log(error)        
        }).then(function(){
        });
    })

    document.getElementById('cliente').addEventListener('click', function(){
        let ficha = "";

        ficha = `<div id="modalCliente" class="modal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Nuevo Cliente</h5>
                    </div>
                    <div class="modal-body">
                    <div>
                        <label for="nombre" class="modalLabels">Nombre: </label>
                        <input type="text" name="nombre" class="modalInputs" id="nombreModal" value=`+`><br>
        
                        <label for="apellidos" class="modalLabels">Apellidos:</label>
                        <input type="text" name="apellidos" class="modalInputs" id="apellidos" value=`+`><br>
        
                        <label for="apellidos" class="modalLabels">Dni:</label>
                        <input type="text" name="dni" class="modalInputs" id="dni" value=`+`><br>

                        <label for="apellidos" class="modalLabels">Correo:</label>
                        <input type="text" name="correo" class="modalInputs" id="correo" value=`+`><br>

                        <label for="apellidos" class="modalLabels">Telefono:</label>
                        <input type="text" name="telefono" class="modalInputs" id="telefono" value=`+`><br>
                    </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary bi bi-person-plus-fill" id="nuevoCliente"></button>
                    </div>
                    </div>
                    </div>
                    </div>`
        document.getElementById("fichaModal").innerHTML = ficha;
        $("#modalCliente").modal();

        document.getElementById('nuevoCliente').addEventListener('click', function(){
            axios.get("http://labs.iam.cat/~a16miqboipos/FinalProject_DAW/php/Cliente/nuevoCliente.php", {
                params: {
                    nombre: document.getElementById("nombre").value,
                    apellidos: document.getElementById("apellidos").value,
                    dni: document.getElementById("dni").value,
                    correo: document.getElementById("correo").value,
                    telefono: document.getElementById("telefono").value
                }
            })
            .then(function(){
                console.log("Cliente Añadido");
            }).catch(function(error){
                console.log(error);
            }).then(function(){
            });
        })
    })



}