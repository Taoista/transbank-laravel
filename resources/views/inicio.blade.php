<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INICIO</title>
</head>
<body>
    <strong>TUTORIAL PGO TBK</strong>

    <form action="{{ url('./iniciar_pago') }}" method="POST">
        <label for="fname">Monto:</label><br>
        <input type="text" id="fname" name="fname" value="1500"><br>
        <label for="lname">Session:</label><br>
        <input type="text" id="lname" name="lname" value="12313"><br>
        <label for="lname">ID OC:</label><br>
        <input type="text" id="lname" name="lname" value="69"><br><br>
        <input type="submit" value="Submit">
    </form> 


</body>
</html>