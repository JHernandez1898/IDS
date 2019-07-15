function IniciarSesion(){
    $("#frmLogin").submit(function(e){
    e.preventDefault();
        $.ajax({
            type: "POST",
            url: 'php/login.php',
            data:  $("#frmLogin").serialize(),
            success: function(response)
            {
                if(response == 0){
                    $("#error").html("Contraseña o usuario incorrectos");
                    
                }
                else if(response == -1){
                    $("#error").html("Contraseña o usuario vacios");
                }
                else{
                    location.href="index.php";
                }
            }
        });
    });
}