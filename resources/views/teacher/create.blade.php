<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('teacher.store')}}" method="POST">
    @csrf

    <label>
        <h1>Nombre</h1>
        <br>
        <input type="text" name="name">
    </label>
    <br>
    <label>
        <h1>Telefono</h1>
        <br>
        <input type="text" name="cell_phone">
    </label>
    <br>
    <label>
        <h1>descipcion</h1>
        <br>
        <input type="text" name="description">
    </label>
    <br>
    <button type="submit">enviar</button>
    </form>
</body>
</html>