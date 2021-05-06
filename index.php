<!DOCTYPE html>
<html>
<head>
    <title>MI CALCULADORA</title>
</head>
<body>

<form action="proceso.php" method="post">
    <label>Valor 1</label> <input type="text" name="num1"><br><br>


    <label>Valor 2</label> <input type="text" name="num2"><br><br>

    <select name="opc">
        <option name="Suma">Suma</option>
        <option name="Resta">Resta</option>
        <option name="Multiplicacion">Multiplicacion</option>
        <option name="Division">Division</option>
        <option name="Resto">Resto</option>
    </select>

    <button>Calcular</button>
</form>

</body>
</html>

