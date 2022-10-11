<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>REGISTRO DEL ALUMNO</h3>
    <form action="desarrollo01.php" method="post">
        Nombre: <input type="text" name="txtnombre" placeholder="Escribe tu nombre"><br><br>
        Apellido: <input type="text" name="txtapellido"><br><br>
        Edad: <input type="text" name="txtedad"><br><br>
        Carrera: <select name="cbocarrera">
            <option value="Elige">Elige una carrera</option>
            <option value="Administración">Administración</option>
            <option value="Contabilidad">Contabilidad</option>
            <option value="Ing. de Sistemas">Ing. de Sistemas</option>
            <option value="Ing. Industrial">Ing. Industrial</option>
            <option value="Derecho y CCPP">Derecho y CCPP</option>
        </select><br><br>
        Estado: <br><input type="radio" name="rbtestado" value="Matriculado"> Matriculado <br> 
                <input type="radio" name="rbtestado" value="Inhabilitado"> Inhabilitado <br>
                <input type="radio" name="rbtestado" value="Moroso"> Moroso <br> 

        <input type="submit" value="Registrar" value="btnregistrar">
    </form>
</body>
</html>