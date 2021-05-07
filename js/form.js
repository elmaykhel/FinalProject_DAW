window.onload = function () {
    
    var logeado = false;

    document.getElementById("submit").addEventListener('click', function () {
        if (document.getElementById("username").value === "" || document.getElementById("password").value === "") {
            console.log("campos vacios")
        } else {
            axios.get('http://localhost/FinalProject_DAW/database/php/login.php', {
                params: {
                    username: document.getElementById("username").value,
                    password: document.getElementById("password").value
                }
            })
            .then(function (respuesta) {
                if (respuesta.data.status == "FAIL") {
                    
                } else {
                    logeado = true;
                    password = respuesta.data.password;
                    username = respuesta.data.username;
                    //location.href = 'http://localhost/FinalProject_DAW/principal.html';
                }
            })
            .catch(function (error) {
                console.log("hola");
                console.log(error);
            })
            .then(function () {
                //
            });
        }
    })
}
