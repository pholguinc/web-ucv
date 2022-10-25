<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h3, initial-scale=h3">
    <title>Document</title>
</head>
<body>
    <h3>REGISTRO DE USUARIOS</h3>

    <form action="./insertar_usuario.php" method="post">
        Nombre: <input type="text" name="txtnombre"><br><br>
        Apellido: <input type="text" name="txtapellido"><br><br>
        DNI: <input type="text" name="txtdni"><br><br>
        Dirección: <input type="text" name="txtdireccion"><br><br>
        Fecha Nacimiento: <input type="date" name="txtfecha_nac"><br><br>
        <input type="submit" name="btnregistrar" value="registrar">
    </form>
</body>
</html>