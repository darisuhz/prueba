<html>
    <head>
        <title>Inicia sesion</title>
        <style>
            button{
width: auto;
height: 35px;
background-color: #0d2881;
color: white;
border: solid;
border-width: 4px; 
cursor: pointer; }
        </style>
    </head>
    <body bgcolor="#09a6e4">
        <br>
        <br>
        <br>
        <br>
        <p align="center" style="font-size: 60px; margin-top: 0; margin-bottom: 10;"> 
        <h1 align = "center">
        <?php
            $usuario = $_POST['usuario'];
            $contra = $_POST['contra'];
            if ($usuario=='user' && $contra=='1234'){
                echo "Cuenta de Usuario <br> Inicio de sesion exitoso";
            }
            else if ($usuario=='admin' && $contra=='123456'){
                echo "Cuenta de Administrador <br> Inicio de sesion exitoso";
            }
            else {
                echo "Error<br> Inicio de sesion fallido";
            }

        ?>
        </h1>
        </p>
        <br>
        <br>
        <br>
        <br>
        <p align="center">
  <button onclick="location.href='index.html'" style="background-color: #0d2881; color: white; border: solid;  border-width: 4px; cursor: pointer; width: 200px; height: 50px;" ><b>REGRESAR</b></button>
    </p>
    </body>
</html>

