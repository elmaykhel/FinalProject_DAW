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
                ficha = `<div class="cuadro"><h2 id="tituloDatos">Datos Cliente</h2><hr/><p>DNI: `+ a.dni +`</p><p>Nombre: `+ a.nombre +`</p><p>Apellidos: `+ a.apellidos +`</p><p>Correo: `+ a.correo +`</p><p>Telefono: `+ a.telefono +`</p></div>`;
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
                        <input type="text" name="apellidos" class="modalInputs" id="apellidosModal" value=`+`><br>
        
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
            let nombre = document.getElementById("nombreModal").value;
            let apellidos = document.getElementById("apellidosModal").value;
            let dni = document.getElementById("dni").value;
            let correo = document.getElementById("correo").value;
            let telefono = document.getElementById("telefono").value;

            if(validator(nombre,apellidos,dni,correo,telefono)==true){
                axios.get("http://labs.iam.cat/~a16miqboipos/FinalProject_DAW/php/Cliente/nuevoCliente.php", {
                    params: {
                        nombre: document.getElementById("nombreModal").value,
                        apellidos: document.getElementById("apellidosModal").value,
                        dni: document.getElementById("dni").value,
                        correo: document.getElementById("correo").value,
                        telefono: document.getElementById("telefono").value
                    }
                })
                .then(function(){
                    console.log("Cliente Añadido");
                    $("#modalCliente").removeClass('fade').modal('hide');
                    $('#modalCliente').remove();
                }).catch(function(error){
                    console.log(error);
                }).then(function(){
                });
            }
        })
    })

    function validator(nombre, apellidos, dni, correo, telefono){


        if(nombre==""){
            alert("El Campo nombre no puede estar vacío");
            return false;
        }
        if(apellidos==""){
            alert("El Campo apellidos no puede estar vacío");
            return false;
        }
        if(dni==""){
            alert("El Campo dni no puede estar vacío");
            return false;
        }
        if(correo==""){
            alert("El Campo correo no puede estar vacío");
            return false;
        }
        if(telefono==""){
            alert("El Campo telefono no puede estar vacío");
            return false;
        }
        return true;
    }

}