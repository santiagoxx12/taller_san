<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('student.store')}}" method="POST">
    @csrf

    <label>
        <h1>Nombre</h1>
        <br>
        <input type="text" name="name">
    </label>
    <br>
    <label>
        <h1>Apellidos</h1>
        <br>
        <input type="text" name="apellidos">
    </label>
    <br>

    <button type="submit">enviar</button>
    </form>
</body>
</html>