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
            a = JSON.parse(res.data)
            llenarTabla(a);
        }).catch(function(error){
            console.log(error)        
        }).then(function(){
        });
    })

    function llenarTabla() {
        document.getElementById('tabla').innerHTML = a.nombre + " " + a.apellidos;
    }
}