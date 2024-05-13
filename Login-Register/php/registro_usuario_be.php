<?php

   include 'conexion_be.php';
 
   $Nombre_Completo = $_POST['Nombre_Completo'];
   $Cargo = $_POST['Cargo'];
   $Correo_Electronico = $_POST['Correo_Electronico'];
   $Contraseña = $_POST['Contraseña'];

   //Encriptamiento de contraseña
   $Contraseña = hash('sha512', $Contraseña);

   $query = "INSERT INTO usuarios(Nombre_Completo, Cargo, Correo_Electronico, Contraseña) 
            VALUES ('$Nombre_Completo', '$Cargo', '$Correo_Electronico', '$Contraseña')";
    
    //verificar que el correo no se repita en la base de datos
    $verificar_Correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Correo_Electronico='$Correo_Electronico' ");

    if(mysqli_num_rows($verificar_Correo) > 0){
        echo '
            <script>
                alert("Este correo ya esta registrado, intenta con otro diferente");
                window.location = "../index.php";
            </script>
        ';
        exit();
    } 

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario Almacenado Exitosamente");
                window.location = "../index.php"; 
            </script>    
        ';     
    }else{
        echo '
            <script>
                alert("Inténtalo de nuevo, Usuario no Almacenado");
                window.location = "../index.php";
            </script>
        ';
    }
    
    mysqli_close($conexion);
?>