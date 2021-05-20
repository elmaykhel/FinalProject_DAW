window.onload = function(){
    document.getElementById('boton').addEventListener('click', function(){
        axios.get("http://labs.iam.cat/~a16miqboipos/pruebaMysql/Cliente/mostrarCliente.php", {
            params: {
                nombre: document.getElementById("nombre").value,
                apellidos: document.getElementById("apellidos").value
            }
        })
        .then(function(res){
            console.log(res);
            let ficha = "";
            a = JSON.parse(res.data)
            //ficha = `<div id="dni"><label>DNI: </label><p>`+ a.dni +`</p></div> <div id="nombre"><label>Nombre: </label><p>`+ a.nombre +`</p></div> <div id="apellidos"><label>Apellidos: </label><p>`+ a.apellidos +`</p></div> <div id="correo"><label>Correo: </label><p>`+ a.correo +`</p></div> <div id="telefono"><label>Telefono: </label><p>`+ a.telefono +`</p></div>`;
            ficha = `<div id="modalCliente" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Cliente</h5>
                </div>
                <div class="modal-body">
                <div>
                    <label for="nombre">Nombre: </label>
                    <input type="text" name="nombre" id="nombre" value=`+a.nombre+`><br>
    
                    <label for="apellidos">Apellidos:</label>
                    <br>
                    <input type="text" name="apellidos" id="apellidos" value=`+a.apellidos+`><br>
    
                    <label for="apellidos">Dni:</label>
                    <br>
                    <input type="text" name="dni" id="dni" value=`+a.dni+`><br>

                    <label for="apellidos">Correo:</label>
                    <br>
                    <input type="text" name="correo" id="correo" value=`+a.correo+`><br>

                    <label for="apellidos">Telefono:</label>
                    <br>
                    <input type="text" name="telefono" id="telefono" value=`+a.telefono+`><br>
                </div>
                </div>
                </div>
                </div>
                </div>`
            document.getElementById("ficha").innerHTML = ficha;
            $("#modalCliente").modal();
        }).catch(function(error){
            console.log(error)        
        }).then(function(){
        });
    })
}