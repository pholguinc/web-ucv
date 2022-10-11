<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h3, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>OPERACIONES MATEMÁTICAS</h3>

    <form action="desarrollo03.php" method="post">
        Número 1: <input type="text" name="txtnum1"><br><br>
        Número 2: <input type="text" name="txtnum2"><br><br>

        Operación: <select name="cbooperacion">
            <option value="1">Sumar</option>
            <option value="2">Restar</option>
            <option value="3">Multiplicar</option>
            <option value="4">Dividir</option>  
        </select><br><br>

        <input type="submit" value="Calcular" name="btnCalcular">
    </form>
</body>
</html>