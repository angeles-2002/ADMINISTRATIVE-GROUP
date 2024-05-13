<?php
    
    session_start();

    if(isset($_SESSION['usuario'])){
        header ("location: bienvenida.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMINISTRATIVE GROUP</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>

        <main>
        
            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="php/login_usuario_be.php"  method="POST" class="formulario__login">
                        <h2>Administrative Group</h2>
                        <input type="text" placeholder="Correo Electrónico" name="Correo_Electronico" required>
                        <input type="password" placeholder="Contraseña" name="Contraseña" required>
                        <button>Iniciar Sesión</button>
                    </form>

                    <!--Registro-->
                    <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                        <h2>Regístrarse</h2>
                        <input type="text" placeholder="Nombre Completo" name="Nombre_Completo" required>
                        <input type="text" placeholder="Cargo" name="Cargo" required>
                        <input type="text" placeholder="Correo Electrónico" name="Correo_Electronico" required>
                        <input type="password" placeholder="Contraseña" name="Contraseña" required>
                        <button>Regístrarse</button>
                    </form>
                </div>
            </div>

        </main>

        <script src="assets/js/script.js"></script>
</body>
</html>